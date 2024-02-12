<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

        $permissions = [
            'can-create-post', 'can-edit-post', 'can-delete-post',
            'can-view-emails', 'can-view-messages', 'can-view-registered-users', 'can-edit-registered-users', 'can-delete-registered-users',
            'can-view-active-loans','can-view-pending-loans','can-view-denied-loans','can-make-payments-update','can-view-loan-agreement-forms',
            'can-approve-loan-applications','can-upload-settlements','can-add-roles','can-give-permissions','can-give-roles-to-users','can-revoke-roles','dlo','cfo','can-send-text','can-export-users',
            'can-check-permissions','can-view-charts','can-check-incoming-payments','can-check-todays-payments','can-check-missed-payments','can-check-their-profile',
            'can-change-their-password'
        ];
        foreach ($permissions as $permission) {
            DB::table('permissions')->insert([
                'name' => $permission,
                'guard_name' => 'web',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
        }

      
    }
}
