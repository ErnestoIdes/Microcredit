@props(['status'])

@if ($status)
<div class="alert alert-info alert-dismissible fade show " role="alert">
         <div {{ $attributes }}>
        <div class="font-medium text-600">
            <i class="fa-regular fa-bell"></i>
        <strong>Hello there!</strong> You have some feedbacks
        </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600']) }}>
        {{ $status }}
    </div>
        </ul>
          </div>
    </div> 
@endif
