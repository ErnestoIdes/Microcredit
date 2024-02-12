<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">



</head>

<body id="page-top">


  <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">LOAN AGREEMENT FORM</h5>

        </div>
        <div class="modal-body">


          <style>
            body {
              font-size: 9px;
            }



/* Dashed red border */
hr.new2 {
  border-top: dashed black;
}




            .page-break {
              page-break-after: always;
            }



            /* Box Sizing */
            * {
              box-sizing: border-box;
            }

            /* Create two equal columns that floats next to each other */
            .column1 {
              float: left;
              width: 100%;
              padding: 2px;
              height: 5px;
              /* Should be removed. Only for demonstration */
            }

            .column2 {
              float: left;
              width: 50%;
              padding: 2px;
              height: 5px;
              /* Should be removed. Only for demonstration */
            }

            .column3 {
              float: left;
              width: 30%;
              padding: 2px;
              height: 5px;
              /* Should be removed. Only for demonstration */
            }

            .column7 {
              float: left;
              width: 12%;
              padding: 2px;
              height: 5px;
              /* Should be removed. Only for demonstration */
            }

            /* Clear floats after the columns */
            .row:after {
              content: "";
              display: table;
              clear: both;
            }
          </style>




          <center>
          
    <img src="{{asset('images/logo.JPG')}}" width="160" height="100" alt="{{config('app.name')}}" style="margin-top:20px;">
    <br><br>


    <img src="{{asset('attatchments_loans/'.$hold_loan->profilepic)}}" width="100" height="100" alt="{{$applicant->firstname. ' '.$applicant->lastname}}">


  

            <h4>{{$applicant->firstname. ' '.$applicant->lastname}}</h4>


          </center>
          <br>


          <p>Application Date: date('j, F-Y',strtotime($hold_loan->created_at))</p>

          <h3>Loan Agreement</h3>

          <h3> 1.0 Parties of the Agreement</h3>

          <p>1.1. "The lender" : <strong>{{config('app.name')}}</strong></p>

          <p>1.2."The Borrower" - <strong>{{$applicant->firstname. ' '.$applicant->lastname}}</strong></p>
          <p><strong>“The Lender"</strong> and <strong>"The Borrower"</strong> acting under the Zambian legislation and
            the rights under the charter of the lender, have agreed on the following:
          </p>
          <h3>2.0 Subject of the Agreement</h3>

          <p>2.1. On the basis of the terms specified in this Agreement, the Lender will provide the Borrower with a
            loan facility of “ZMW <strong> {{$hold_loan->emi}}</strong>
            ” at a total credit of "<strong>6.69%</strong>
            " per Month payable in "<strong>{{$hold_loan->months}}</strong>
            " installment(s) following the borrower completion of the online application form that is on the lender’s
            on-line platform including the use of electronic signatures.</p>
          <p>2.2. The lender and the borrower hereby agree that they shall be at liberty to appoint agents to act for
            them and agency law shall apply.</p>
          <p>2.3. Lender and Borrower take responsibility to fulfill commitments towards each other fully and in due
            time.</p>

          <h3>3.0 Declaration and Signature</h3>

          <p>3.1. The borrower undertakes to have truthfully and fully disclosed all details relating to the facility in
            the online loan application form and acknowledges having agreed to the lender's website terms of use.</p>




          <h3>4.0 Acknowledgement of Receipt of Cash</h3>

          <p>4.1 I<strong> “{{$applicant->firstname. ' '.$applicant->lastname}}” </strong> hereby acknowledges receipt of ZMW
            “<strong>{{$hold_loan->amount}}</strong>
            ” paid out in cash and/or by Deposit to Bank Account/ Mobile money on the date
            <strong>date('j, F-Y',strtotime($hold_loan->created_at))</strong></p>

          <h3>5.0 Repayment</h3>
          <p>5.1 The Borrower agrees to repay the amount of the Loan, interest and other charges on the terms of this
            Agreement via monthly installments.</p>
          <p>5.2 The first installment payable under this Agreement shall be the next Salary Day following the date of
            execution of this contract.</p>
          <p>5.3 Without prejudice to the provisions of other Clauses in this contract, the Credit Provider may at its
            sole discretion collect each installment due under this Agreement on the Borrower's salary day ("Collection
            Day") or at any time when funds are available in the Borrower's bank account provided always that such
            collection dates fall on or after the due date of any such installment. The Borrower acknowledges that any
            such collection by the Credit Provider does not constitute a waiver of its rights to enforce payment of any
            installment that is due.</p>
          <h3>6.0 Direct Debit Mandate</h3>
          <p>6.1 By signing the Direct Debit mandate which the Credit Provider has included in this Agreement, the
            Borrower authorizes the Credit Provider to satisfy the Borrower's obligations by making a charge against a
            bank account held by the Borrower. The Borrower acknowledges that the Credit Provider is under no obligation
            to obtain payment of the Borrower's obligations solely by making a charge against a bank account held by the
            Borrower, and that it has a right at any time to call for payment by other methods, including without
            limitation by way of deductions, from the Borrower's salary or directly from the Borrower.</p>
          <p>6.2 The Borrower agrees that should funds not be available at the time that the direct debit is presented
            to the Borrower's bank, the Credit Provider may continue presenting the unpaid debit instruction for as long
            as it chooses to do so.</p>
          <p>6.3 The Borrower remains fully liable and responsible for payment of all amounts due and payable under this
            Agreement notwithstanding any failure by the Credit Provider or any other person to effect payment thereof
            by way of making a charge against a bank account held by the Borrower.</p>
          <p>6.4The Borrower is responsible for all bank charges, charged by the Borrower's bank to the Borrower, for
            all attempts to effect payment.</p>
          <p>6.5. The Borrower will immediately notify the Credit Provider if the Borrower changes the bank account into
            which the Borrower's salary is paid. The Borrower gives the Credit Provider consent to enforce collections
            through direct debit or any other means or any account which the salary is paid through.</p>
          <p>6.6. The Borrower gives the Credit provider consent to contact his employer or bank in order to obtain the
            borrower's salary bank account details. The borrower gives the Credit Provider consent to enforce
            collections through direct debit or any other means on any account which the salary is paid through.</p>
          <h3>7.0 Collection from Employer</h3>
          <p>7.1. By signing the salary deduction consent which the Credit Provider has included in this Agreement, the
            Borrower has authorized the Credit Provider to satisfy the Borrowers obligations by way of deductions
            directly from the Borrower's salary. The Borrower acknowledges that the Credit Provider is under no
            obligation to seek payment solely by way of deductions from the Borrower’s salary and that it has a right at
            any time to call for payment by other methods including without limitation by way of making a charge against
            the Borrower's bank account or directly from the Borrower.</p>
          <p>7.2. The Borrower remains fully liable and responsible for payment of all amounts due and payable under
            this Agreement notwithstanding any failure by the Credit Provider or any other person to effect payment
            thereof by way of a deduction from the Borrower's salary.</p>
          <p>7.3. The Borrower will immediately notify the Credit Provider if the Borrower changes employer.</p>
          <p>7.4. The Credit Provider may deduct all amounts outstanding from the Borrower's employment benefits at
            termination resulting from, but not limited to, desertion, early retirement, normal retirement, dismissal or
            medical reasons.</p>
          <h3>8.0 Early Settlement</h3>
          <p>8.1. The Borrower has an option of making an early settlement of the Loan prior to the Loan maturity date.
            The settlement amount is the total of the following amounts:</p>
          <p>8.2 The unpaid balance of the Loan at the time of termination, the unpaid interest charges and all other
            fees and charges payable by the Borrower to the Credit Provider up to the settlement date;</p>
          <p>8.3 The Credit Provider will credit each payment made under the Agreement to the Borrower as of the date of
            receipt of payment, as follows:</p>
          <p>8.3.1 First, to satisfy any due or unpaid interest charges;</p>
          <p>8.3.2 Secondly, to satisfy any due or unpaid fees or charges; and</p>
          <p>8.3.3 Thirdly, to reduce the amount of the principal debt.</p>
          <h3>9.0 Refunds</h3>
          <p>9.1 In the event of over recovery at payroll, such amounts will be refunded to the extent that all amounts
            due or overdue and in arrears are recovered first. </p>
          <p>9.2 The bank account details as shown in Bank Direct debit mandate may be used for the Disbursement of loan
            proceeds and refund payments that may become due and payable to the Borrower. in the case of a Refund, if
            the Borrower fails to object to the amount refunded in writing within 30 days, the Borrower shall be deemed
            to have waived the right to object to the amount refunded.</p <h3>10.0 Replacement Loan</h3>
          <p>10.1. lf the Borrower applies for a replacement Loan and the Credit Provider approves this application.
            Then the settlement value of the existing Loan shall be calculated by taking the outstanding Loan balance as
            at the beginning of the current period plus the daily interest from the beginning of the current period to
            the date of settlement.</p>
          <p>10.2 This new loan balance shall be added to the additional capital disbursed which in total shall then
            constitute the new replacement Loan.</p>
          <h3>11.0 Credit provider's right to terminate the agreement</h3>
          <p>11.1 This Agreement shall remain in effect until all indebtedness and/or any existing obligations that the
            Borrower may have towards the Credit Provider are extinguished in full unless terminated as provided below:
          <p>
          <p>11.2. Where the Borrower is in default, the Credit Provider may accelerate payment of all outstanding
            payments due or payable under the Agreement and/or terminate the Agreement.</p>
          <p>11.3. lf an event of default occurs the Credit Provider may commence legal proceedings to enforce the
            contract.</p>
          <p>11.4. An event of default will have occurred where:</p>
          <p>11.4.1. The Borrower fails to make payment of any amount payable under this contract</p>
          <p>11.4.2 The Borrower's employment is terminated;</p>
          <p>11.4.3 The Borrower breaches any of the provisions of this Agreement;</p>
          <p>11.4.4 The Borrower commits any act of insolvency;</p>
          <p>11.4.5 The Borrower dies;</p>
          <p>11.4.6 The Borrower provides incorrect information; or the Borrower does not honor this Agreement on the
            due date thereof or commits anything to prejudice the Credit Provider's rights in terms of this Agreement.
          </p>
          <p>11.4.7 No relaxation or indulgence which the Credit Provider may show to the Borrower shall in any way
            prejudice or be deemed to be a waiver of its rights and, in particular, no acceptance by the Credit Provider
            of payment after due date (whether on one or more occasions) nor any other act or omission by the Credit
            Provider shall preclude or stop it from exercising any rights enjoyed by it hereunder by reason of any
            subsequent payment not being made strictly on due dates or by reason of any subsequent breach by the
            Borrower.</p>
          <h3>12.0 Legal Costs</h3>
          <p>12.1. So far as permitted by law, the Borrower agrees to repay all expenses and legal costs incurred by the
            Credit Provider or incurred on its behalf in the recovery of any overdue Payment.</p>
          <p>12.2. in the event of default, administration charges will be imposed and be recovered from the Borrower.
            Any tracing fees will be recovered from the Borrower. All attorney's or debt collectors' costs will also be
            recovered from the Borrower as applicable on the attorney and client scale or the tariff agreed with the
            debt collector.</p>
          <p>12.3. The Borrower will be liable for all collection costs including collection commission incurred by the
            Credit Provider in respect of the enforcement of the Borrowers monetary obligations under this Agreement.
          </p>
          <h3>13.0 Variation or Amendment</h3>
          <p>This Loan Agreement or any provision or term hereof shall be binding and may be amended, varied and
            canceled at the instance of the Credit Provider. Any such variations or amendments may be published in
            posters or pamphlets available at the Company's branch outlets, in daily newspapers or any other means as
            determined by the Company and any such variations and amendments shall take effect immediately upon
            publication.</p>
          <h3>14.0 Cession</h3>
          <p>The Credit Provider has the right to transfer all its rights in terms of this Agreement to a third party.
            Where such transfer is effected, unless instructed otherwise, the Borrower must continue to pay the original
            credit provider in its capacity as agent for the third party.</p>
          <h3>15.0 Allowances</h3>
          <p>Should the Credit Provider not take action against the Borrower when the Borrower fails to make a payment
            on a due date or when the Borrower fails to do anything else required by this Agreement, this does not mean
            that the Credit Provider has given up its right to legal action or to exercise any other right.</p>
          <h3>16.0 Jurisdiction</h3>
          <p>This Agreement is governed by the laws of Zambia and the Borrower agrees that the courts of Zambia have
            exclusive jurisdiction to hear or deal with any dispute that arises in connection with this Agreement.</p>
          <h3>17.0 Notices</h3>
          <p>All notices to the Credit Provider must be in writing and sent by registered post or delivered by hand to
            the Credit Provider's address as indicated in this Agreement. Where notices are delivered by the Borrower to
            the Credit Provider, a signature acknowledging the date and fact of receipt must be obtained. The Borrower
            shall within seven (7) days give written notice to the Credit Provider of any change in the Borrower's
            address, telephone number and other contact details. The Borrower acknowledges, accepts and agrees that the
            Company may send information concerning the Loan including any variations and amendments via postal
            delivery' e-mail, to the Borrower's physical address or by Short Message Service (SMS) to the number
            provided by the Borrower, in which case these will be deemed received by the Borrower within five (5) days
            after the dispatch of such information.</p>
          <h3>18.0 Privacy Clause</h3>
          <p>The Credit Provider shall treat the Borrower's personal information as private and confidential, even on
            cessation and/or full payment by the Borrower of their obligations under this Agreement. Nothing about the
            Borrower's accounts nor name and address will be disclosed to anyone other than in exceptional circumstances
            below. These are:</p>
          <p>18.1 Where the institution is legally compelled to do so, e.g. Credit Reference Bureau</p>
          <p>18.2 Where it is in the public interest to disclose</p>
          <p>18.3 Where our interests require disclosure, e.g. Employers, Bank and insurance</p>
          <p>18.4 Where disclosure is made at your request or with your written consent</p>
          <p>18.5 Where disclosure to any third party by the Credit Provider is necessary to enforce collection or
            recovery of payments due to the Credit Provider in terms of this Agreement, at any point during its life</p>
          <p>18.6 Where disclosure to any third party by the Credit Provider is necessary to enforce collection or
            recovery of the outstanding balance of this loan in event of default by the Borrower and/or termination of
            this Agreement</p>
          <p>18.7 Where disclosure to any third party is necessary to enable the Credit Provider vet the Borrower in
            terms of credit worthiness in order to give the Credit Provider comfort to proceed with execution of this
            Agreement.</p>
          <h3>19.0 Payroll Authorization</h3>
          <p>In pursuance of the conditions on which the loan, as reflected above, was granted, I hereby irrevocably
            authorize the payroll department of my employer to deduct the installments as reflected in this agreement
            from my remuneration until the contractual amount has been paid in full. The installment amount may be
            varied at the request of the credit provider in the event of a general increase or decrease in the rates
            applicable to the loan, or where the installments are rescheduled as a result of the default or other
            arrangements. A variation as aforementioned will result in the total contractual amount being adjusted
            accordingly.</p>
          <p>I acknowledge that the loan may not have been granted to me had my employer not concluded an agreement with
            the credit provider in terms whereof my employer is contractually bound to make the aforementioned
            deductions. I further acknowledge that the deductions made in accordance with this payroll authorization may
            only be discontinued when I leave the employment as indicated or once the Loan has been repaid in full or
            where the Credit Provider in writing consents to the discontinuation thereof. Should my employment be
            terminated before the loan has been repaid in full I hereby authorize my employer to deduct the then
            outstanding balance of the loan(s) from all amounts that become payable to me as a result of the termination
            of my employment and further authorize the Credit Provider to continue recovering the Loan balance through
            my bank account, or through payroll deductions from my remuneration due to me from my employer, post
            termination, until the loan balance is extinguished. I hereby undertake to authorize my employer to effect
            deductions from payroll until the loan is liquidated in full.</p>
          <h3>20.0 Whole Agreement, Declaration and Signature</h3>
          <p>This Agreement sets out the entire agreement between the Borrower and the Credit Provider concerning the
            Loan and supersedes any representations, warranties, course of dealing or agreements (written or oral)
            previously made between the Borrower and the Credit Provider. The Borrower confirms and acknowledges that in
            entering this Agreement, the Borrower has not relied on any representation or statement other than those set
            out in this Agreement. By signing this Agreement, the Borrower confirms that they have, hereby, applied for
            a loan in the amount fully disclosed in this Agreement and acknowledge that they have read, understood and
            agreed to be bound by this Loan Agreement and the Terms and Conditions contained in this entire agreement
            and have noted all costs and repayment details. The Borrower further confirms and declares that all the
            information given to the Credit Provider in this Agreement is true and complete.</p>
          <h3>21.0 Non – Discrimination</h3>
          <p>The Borrower will be treated with the utmost dignity and respect in accordance with their rights and
            freedoms as enshrined in the Constitution of Zambia, Act. No. 2 of 2016. Likewise, it is expected that the
            Borrower will not discriminate against an employee(s) of the Credit Provider in any way.</p>
          <h3>22.0 Signature and Date</h3>
          <p>The Parties hereby agree to the terms and conditions set forth in this Agreement and such is demonstrated
            throughout by their signatures below:</p>
          <p>Signed this <strong>{{date('d')}} day of {{date('F-Y')}}</strong>

          <h3>Signed by the Borrower </h3>
          <p>Full Name of Borrower: <strong>{{$applicant->firstname. ' '.$applicant->lastname}} </strong></p>
        <p>Verified Email: <strong>{{$applicant->email}} </strong></p>
<br>
         <p> Signature of Borrower: <img src="{{asset('attatchments_loans/'.$applicant->signature->getSignatureImagePath())}}"
                                         class="img-fluid my-5" width="60" height="60" alt="$applicant->firstname. ' '.$applicant->lastname" /></p>

          <h3>Signed for and on behalf of the Credit Provider</h3>
          <p>Full Name of Credit Provider Representative: <strong>{{$rep}}</strong></p>
          <p>Signature - Credit Provider Representative: <img src="{{asset('attatchments_loans/'.auth()->user()->signature->getSignatureImagePath())}}" class="img-fluid my-5" width="60"
              height="60" alt="Credit Signature" />
          </p>



          <div class="page-break"></div>



          <h3>MANDATE TO THE BANK TO PAY BY DIRECT DEBIT</h3>
        
        <center>
          <img src="{{asset('attatchments_loans/'.$applicant->profilepic)}}" class="img-fluid my-5" width="40"
              height="40" alt="Borrower Selfie" />
        </center>
        
          <p>Name and full postal address of the service provider</p>

        

          <p>TCS Limited t/a Eliana Cash Express</p>
          <p>Plot 24/27 Manchinchi Road Lusaka</p>
          <p> Lusaka, 10101</p>

          <!-- Customer Number Position Id with Eliana CashXpress -->
          
          <div class="row">
            <div class="column1" >
              Service provider Reference Number: {{$applicant->loan_number}}
            </div>

          </div>

          <!-- Customer Number Position Id with Eliana CashXpress Ends here-->


          <br>


          <!---For civil servants under payroll based-->
          <h4>Payment Date (DD/MM/YYYY) </h4>

          <div class="row">
            <div class="column1" >
              <strong>21-{{date('F-Y')}}</strong> 
            </div>

          </div>

          <!---For civil servants under payroll based-->
          <br>


          <!-- Fixed Amount to be debited -->
          <div class="row">
            <div class="column1" >
              Fixed amount to be debited
                (ZMW): <strong>{{$hold_loan->emi}}</strong>
            </div>

          </div>

          <!-- Fixed Amount to be debited-->



          <br>

          <!-- How many days can the Direct Debit processed before the payment Date? -->
          

          <div class="row">
            <div class="column1" >
              How many days can the Direct Debit be processed before the payment Date?: <strong>-10 of pay day</strong>
            </div>

          </div>

          <!-- How many days can the Direct Debit processed before the payment Date? -->


          <br>

          <!-- Loan Due Date -->

          <div class="row">
            <div class="column1" >
              
              Expiry Date (DD/MM/YYYY h:m:s): <strong>{{ date('j, F-Y',strtotime($hold_loan->due_date)) }}</strong>
            </div>

          </div>

          <!-- Loan Due Date Ends here -->




          <br>
          <!-- Variable amount to be debited subject to maximum of     
        (ZMW) -->

          <div class="row">
            <div class="column1" >
             
              Variable amount to be debited subject to maximum of
                (ZMW): <strong>{{$hold_loan->emi+1000}}</strong>
            </div>

          </div>

          <!-- Variable amount to be debited subject to maximum of     
        (ZMW) -->

<br>

          <div class="row">
            <div class="column1" >
             
              How many days can the Direct Debit be processed after payment Date?
                (ZMW): <strong>+10 of payday</strong>
            </div>

          </div>

          <!-- Variable amount to be debited subject to maximum of     
        (ZMW) -->
<br>
        <hr class="new2">







          <!--Payment Freqency-->
          <h4>Payment Frequency* (Tick as applicable)</h4>
          <p>*D= Daily W= Weekly FN= Fortnightly M= Monthly Q= Quarterly H= Half yearly A= Annually </p>

          <div class="row">
            <div class="column7" >
              <strong>D</strong>
             <p>Nil</p> 
            </div>
            <div class="column7" >
              <strong>W
              </strong>
              <p>Nil</p> 
            </div>
            <div class="column7" >
              <strong> FN</strong>
              <p>Nil</p> 
            </div>
            <div class="column7" >
              <strong>M</strong>
              <p style="font-family: DejaVu Sans, sans-serif;">✔</p> 
            </div>
            <div class="column7" >
              <strong> Q</strong>
              <p>Nil</p> 
            </div>
            <div class="column7" >
              <strong>H</strong>
              <p>Nil</p> 
            </div>
            <div class="column7" >
              <strong>A</strong>
              <p>Nil</p> 
            </div>

          </div>

          <!--End Payment Frequency-->



          



          <br><br>
         
          <h3>Payer’s Personal Details</h3>          
          

          

          

          <div class="row">
            <div class="column1" >
               Name(s): <strong>{{$applicant->firstname. ' '.$applicant->lastname}} </strong>
              
            </div>

          </div>

          <!--Name Ends here -->

          <br>





          <div class="row">
            <div class="column1" >
               Telephone Number: <strong>{{$applicant->phone}} </strong>
              
            </div>

          </div>

          <!--Telephone Ends here -->

          <br>


          <!-- Payer NRC -->




          <div class="row">
            <div class="column1" >
               NRC: <strong>{{$applicant->nrc}} </strong>
              
            </div>

          </div>

          
          <br>



          <!-- Payer Email -->



          <div class="row">
            <div class="column1" >
               Verified Email: <strong>{{$applicant->email}} </strong>
              
            </div>

          </div>

          <!--Email Ends here -->

          <br>


          <!-- Payer Address -->




          <div class="row">
            <div class="column1" >
               Physical Address: <strong>{{$applicant->address}}</strong>
              
            </div>

          </div>

          <!--Address Ends here -->

          <br><hr class="new2">







          <h3>Payer’s Bank Details:</h3>


          <!-- Payer's Bank Details -->



          <h4> Client Bank Details</h4>

          <div class="row">
            <div class="column3" >
               Bank Name: <strong>{{$applicant->bank_id}} </strong>
              
            </div>
            <div class="column3" >
              Bank Branch:<strong>{{$applicant->bank_branch_id}} </strong>              
            </div>
            <div class="column3" >
              Bank Account Number: <strong>{{$applicant->bank_account_no}} </strong>
             
            </div>

          </div>

          <!-- Payers Bank Details Ends here -->







          <h3>To the Manager</h3>
          <p>Name and full postal address of your Bank</p>


          <p>Bank Name: {{$applicant->bank_id}} </p>
          <p>Bank Branch: {{$applicant->bank_branch_id}} </p>
          <p>Lusaka, 10101</p>


          <h3>INSTRUCTION TO DEBIT MY ACCOUNT</h3>
          <p>Please pay TCS Ltd t/a Eliana Cash Express, Direct Debits from my account detailed in this mandate subject
            to safeguards assured by the Direct Debits Guarantee. I/we understand that this mandate is completed online
            and as such details will be passed electronically to the Bank/NBFI by Eliana Cash Express.</p>
          Signatures:<br> <img src="{{asset('attatchments_loans/'.$applicant->signature->getSignatureImagePath())}}" class="img-fluid my-5"
            width="100" height="80" alt="$applicant->fistname. ' '.$applicant->lastname " />
          <h3>Date : {{date('j-F-Y')}} </h3>

          <h3> Banks/NBFIs may not accept Direct Debit Mandates for some types of accounts</h3>
          <small>This Guarantee is offered by all Banks/NBFI that take part in the DDACC System. The efficiency and
            security of the Direct Debit is monitored and protected by your own Bank/NBFI. </small>
          <small>If the amounts to be paid or the payment dates change, Eliana Cash Express will notify you 14 working
            days in advance of your account being debited or as otherwise agreed. If an error is made by Eliana Cash
            Express, you are guaranteed a full and immediate refund of the amount paid from Eliana Cash Express.</small>
          <small> If an error is made by your bank/NBFI, you are guaranteed a full and immediate refund from your branch
            of the amount paid.</small>
          <small> You can cancel a Direct Debit at any time by writing to your Bank/NBFI. Please also send a copy of
            your letter to us.</small>



        </div>

      </div>
    </div>
  </div>







</body>

</html>