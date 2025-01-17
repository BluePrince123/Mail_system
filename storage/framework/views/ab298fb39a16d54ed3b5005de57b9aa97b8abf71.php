  <?php $__env->startSection('title'); ?> <?php echo e($title); ?> :: ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?> <?php $__env->startSection('styles'); ?> ##parent-placeholder-bf62280f159b1468fff0c96540f3989d41279669##
<style type="text/css">
.form-control-feedback {
    display: none;
}

.wizard>.actions>ul>li>a[href="#finish"] {
    display: none
}
</style>
<?php $__env->stopSection(); ?>  <?php $__env->startSection('main'); ?> <?php echo $__env->make('utils.errors.list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php echo $__env->make('utils.vendor.flash.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- Wizard with validation -->
<div class="panel panel-white">
    <div class="panel-heading">
        <h6 class="panel-title"><?php echo e(trans('register.register_new_memeber')); ?></h6>
        <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
            </ul>
        </div>
    </div>
    <div class="panel-body">
        <form class="form-vertical steps-validation" action="<?php echo e(url('admin/register')); ?>" method="POST" data-parsley-validate="true" name="form-wizard">
            <?php echo csrf_field(); ?>

            <input type="hidden" name="payment" id="payment" value="paypal">
            <input type="hidden" name="pack_new" id="pack_new" value="">

          
              <input type="hidden" name="payable_vouchers[]" value=""> 


             
          <!--   <h6 class="width-full"><?php echo e(trans('register.network_information')); ?>  </h6>
            <fieldset>
                <div class="row">
                    <div class="col-md-4">
                        <div class="required form-group has-feedbackX has-feedback-leftx <?php echo e($errors->has('sponsor') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('sponsor', trans("all.sponsor"), array('class' => 'control-label')); ?>

                            <input class="form-control" value="<?php echo e(Auth::user()->username); ?>" required="required" data-parsley-required-message="all.please_enter_sponsor_name" name="sponsor" type="text" id="sponsor" data-parsley-group="block-0" data-parsley-sponsor="null"> -->
                            <!--data-parsley-remote="data-parsley-remote" data-parsley-remote-validator="validate_sponsor" data-parsley-remote-options='{ "type": "POST", "dataType": "jsonp", "data": { "csrf": <?php echo e(csrf_token()); ?> } }' data-parsley-remote-message="all.there_is_no_user_with_that_username" data-parsley-trigger-after-failure="change" data-parsley-trigger="change" 
                            -->
                         <!--    <div class="form-control-feedback">
                                <i class="icon-person text-muted"></i>
                            </div>
                            <span class="help-block">
                                <small><?php echo trans("all.type_your_sponsors_username"); ?></small>
                                <?php if($errors->has('sponsor')): ?>
                                <strong><?php echo e($errors->first('sponsor')); ?></strong>
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>
                    <?php if($leg): ?>
                    <div class="col-md-4">
                        <div class="required form-group<?php echo e($errors->has('placement_user') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('placement_user', trans("all.placement_username"), array('class' => 'control-label')); ?> <?php echo Form::text('placement_user', $placement_user, ['class' => 'form-control','required' => 'required','data-parsley-required-message' => trans("all.please_enter_placement_username") ,'data-parsley-group' => 'block-0','value' => $placement_user,'readonly']); ?>

                        </div>
                    </div>
                    <?php else: ?> <?php if($placement_user): ?>
                    <input type="hidden" name="placement_user" placeholder="<?php echo e(trans('register.placement_username')); ?>" class="form-control" value="<?php echo e($placement_user); ?>" required /> <?php endif; ?> <?php endif; ?> -->
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <!-- <div class="col-md-4">
                        <div class="required form-group has-feedbackX has-feedback-leftx <?php echo e($errors->has('leg') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('leg', trans("register.position"), array('class' => 'control-label',($leg)? 'readonly' : "")); ?>

                            <select class="form-control" name="leg" id="leg" required data-parsley-group="block-0">
                                <option <?php if($leg=='L' ): ?> selected <?php endif; ?> value="L"><?php echo e(trans('register.left')); ?></option>
                                <option <?php if($leg=='R' ): ?> selected <?php endif; ?> value="R"><?php echo e(trans('register.right')); ?></option>
                            </select>
                            <div class="form-control-feedback">
                                <i class=" icon-drag-left-right text-muted"></i>
                            </div>
                            <span class="help-block">
                                <small><?php echo trans("all.type_your_sponsors_username"); ?></small>
                                <?php if($errors->has('sponsor_name')): ?>
                                <strong><?php echo e($errors->first('sponsor_name')); ?></strong>
                                <?php endif; ?>
                            </span>
                        </div>
                    </div> -->
             <!--        <div class="col-md-4">
                        <div class="required form-group has-feedbackX has-feedback-leftx <?php echo e($errors->has('package') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('package', trans("register.package"), array('class' => 'control-label')); ?>

                            <select class="form-control" name="package" id="package" required="required" data-parsley-required-message="Please Select Package" data-parsley-group="block-0">
                                <?php $__currentLoopData = $package; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($data->id); ?>" amount="<?php echo e($data->amount); ?>" rs="<?php echo e($data->rs); ?>" pv="<?php echo e($data->pv); ?>"><?php echo e($data->package); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <div class="form-control-feedback">
                                <i class="icon-crown text-muted"></i>
                            </div>
                            <span class="help-block">
                                <small><?php echo trans("all.select_package"); ?></small>
                                <?php if($errors->has('package')): ?>
                                <strong><?php echo e($errors->first('package')); ?></strong>
                                <?php endif; ?>
                            </span>
                        </div>
                    </div> -->
         <!--        </div>
            </fieldset> -->
            <h6 class="width-full">  <?php echo e(trans('register.contact_information')); ?>  </h6>
            <fieldset>

                     <div class="row">
   
                  <div class="col-md-6">
                        <div class="required form-group has-feedbackX has-feedback-leftx <?php echo e($errors->has('sponsor') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('sponsor', trans("all.sponsor"), array('class' => 'control-label')); ?>

                            <input class="form-control" value="<?php echo e(Auth::user()->username); ?>" required="required" data-parsley-required-message="all.please_enter_sponsor_name" name="sponsor" type="text" id="sponsor" data-parsley-group="block-0" data-parsley-sponsor="null" readonly>
                            <!--data-parsley-remote="data-parsley-remote" data-parsley-remote-validator="validate_sponsor" data-parsley-remote-options='{ "type": "POST", "dataType": "jsonp", "data": { "csrf": <?php echo e(csrf_token()); ?> } }' data-parsley-remote-message="all.there_is_no_user_with_that_username" data-parsley-trigger-after-failure="change" data-parsley-trigger="change" 
                            -->
                            <div class="form-control-feedback">
                                <i class="icon-person text-muted"></i>
                            </div>
                            <span class="help-block">
                                <small><?php echo trans("all.type_your_sponsors_username"); ?></small>
                                <?php if($errors->has('sponsor')): ?>
                                <strong><?php echo e($errors->first('sponsor')); ?></strong>
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>






                           <?php if($leg): ?>
                    <div class="col-md-6">
                        <div class="required form-group<?php echo e($errors->has('placement_user') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('placement_user', trans("all.placement_username"), array('class' => 'control-label')); ?> <?php echo Form::text('placement_user', $placement_user, ['class' => 'form-control','required' => 'required','data-parsley-required-message' => trans("all.please_enter_placement_username") ,'data-parsley-group' => 'block-0','value' => $placement_user,'readonly']); ?>

                        </div>
                    </div>
                    <?php else: ?> <?php if($placement_user): ?>
                    <input type="hidden" name="placement_user" placeholder="<?php echo e(trans('register.placement_username')); ?>" class="form-control" value="<?php echo e($placement_user); ?>" required /> <?php endif; ?> <?php endif; ?>

               
                </div>
                <div class="row">
                         <div class="col-md-6">
                        <div class="required form-group <?php echo e($errors->has('firstname') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('name', trans("register.firstname"), array('class' => 'control-label')); ?> <?php echo Form::text('firstname', Input::old('firstname'), ['class' => 'form-control','required' => 'required','data-parsley-required-message' => trans("all.please_enter_first_name"),'data-parsley-group' => 'block-0']); ?>

                            <span class="help-block">
                                <small><?php echo trans("all.your_firstname"); ?></small>
                                <?php if($errors->has('firstname')): ?>
                                <strong><?php echo e($errors->first('firstname')); ?></strong>
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="required form-group<?php echo e($errors->has('lastname') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('lastname', trans("register.lastname"), array('class' => 'control-label')); ?> <?php echo Form::text('lastname', Input::old('lastname'), ['class' => 'form-control','required' => 'required','data-parsley-required-message' => trans("all.please_enter_last_name"),'data-parsley-group' => 'block-0']); ?>

                            <span class="help-block">
                                <small><?php echo trans("all.your_lastname"); ?></small>
                                <?php if($errors->has('lastname')): ?>
                                <strong><?php echo e($errors->first('lastname')); ?></strong>
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>

                
                </div>
                <!-- end row -->
                <div class="row">

                   <div class="col-md-6">
                        <div class="required form-group has-feedbackX has-feedback-leftx <?php echo e($errors->has('country') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('country', trans("register.country"), array('class' => 'control-label')); ?> <?php echo Form::select('country', $countries ,'IL',['class' => 'form-control','id' => 'country','required' => 'required','data-parsley-required-message' => trans("all.please_select_country"),'data-parsley-group' => 'block-1']); ?>

                            <div class="form-control-feedback">
                                <i class="fa fa-flag-o text-muted"></i>
                            </div>
                            <span class="help-block">
                                <small><?php echo trans("all.select_country"); ?></small>
                                <?php if($errors->has('country')): ?>
                                <strong><?php echo e($errors->first('country')); ?></strong>
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>
                   
                    <div class="col-md-6">
                        <div class="required form-group<?php echo e($errors->has('state') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('state', trans("register.state"), array('class' => 'control-label')); ?> <?php echo Form::select('state', $states ,'WA',['class' => 'form-control','id' => 'state']); ?>

                            <span class="help-block">
                                <small><?php echo trans("all.select_your_state"); ?></small>
                                <?php if($errors->has('state')): ?>
                                <strong><?php echo e($errors->first('state')); ?></strong>
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>

             
                </div>
                <!-- end row -->
                <div class="row">
                    <!-- begin col-6 -->

                                <div class="col-md-6">
                        <div class="required form-group<?php echo e($errors->has('zip') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('zip', trans("register.zip_code"), array('class' => 'control-label')); ?> <?php echo Form::text('zip', Input::old('zip'), ['class' => 'form-control','required' => 'required','id' => 'zip','data-parsley-required-message' => trans("all.please_enter_zip"),'data-parsley-group' => 'block-0','data-parsley-zip' => 'us','data-parsley-type' => 'digits','data-parsley-length' => '[5,8]','data-parsley-state-and-zip' => 'us','data-parsley-validate-if-empty' => '','data-parsley-errors-container' => '#ziperror' ]); ?>

                            <span class="help-block">
                                <span id="ziplocation"><span></span></span>
                            <span id="ziperror"></span>
                            <small><?php echo trans("all.your_zip"); ?></small> <?php if($errors->has('zip')): ?>
                            <strong><?php echo e($errors->first('zip')); ?></strong> <?php endif; ?>
                            </span>
                        </div>
                    </div>
               
                    <div class="col-md-6">
                        <div class="required form-group<?php echo e($errors->has('address') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('address', trans("register.address"), array('class' => 'control-label')); ?> <?php echo Form::textarea('address', Input::old('address'), ['class' => 'form-control','required' => 'required','id' => 'address','rows'=>'2','data-parsley-required-message' => trans("all.please_enter_address"),'data-parsley-group' => 'block-0']); ?>

                            <span class="help-block">
                                <small><?php echo trans("all.your_address"); ?></small>
                                <?php if($errors->has('address')): ?>
                                <strong><?php echo e($errors->first('address')); ?></strong>
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>

             
                </div>
                <div class="row">
                    <!-- begin col-6 -->

                                <div class="col-md-6">
                        <div class="required form-group has-feedbackX has-feedback-leftx <?php echo e($errors->has('city') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('city', trans("register.city"), array('class' => 'control-label')); ?> <?php echo Form::text('city', Input::old('city'), ['class' => 'form-control','required' => 'required','id' => 'city','data-parsley-required-message' => trans("all.please_enter_city"),'data-parsley-group' => 'block-0']); ?>

                            <div class="form-control-feedback">
                                <i class="icon-city text-muted"></i>
                            </div>
                            <span class="help-block">
                                <small><?php echo trans("all.your_city"); ?></small>
                                <?php if($errors->has('city')): ?>
                                <strong><?php echo e($errors->first('city')); ?></strong>
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>
               
                    <div class="col-md-6">
                        <div class="required form-group has-feedbackX has-feedback-leftx <?php echo e($errors->has('gender') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('gender', trans("register.gender"), array('class' => 'control-label')); ?> <?php echo Form::select('gender', array('m' => trans("all.male"), 'f' => trans("all.female") ,'other' =>trans("all.other")),NULL,['class' => 'form-control','required' => 'required','data-parsley-required-message' => trans("all.please_select_gender"),'data-parsley-group' => 'block-0']); ?>

                            <div class="form-control-feedback">
                                <i class="fa fa-neuter text-muted"></i>
                            </div>
                            <span class="help-block">
                                <small><?php echo trans("all.select_your_gender_from_list"); ?></small>
                                <?php if($errors->has('gender')): ?>
                                <strong><?php echo e($errors->first('gender')); ?></strong>
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>
            

                
                </div>
                <div class="row">
                    <!-- begin col-6 -->

                        <div class="col-md-6">
                        <div class="required form-group has-feedbackX has-feedback-leftx <?php echo e($errors->has('phone') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('phone', trans("register.phone"), array('class' => 'control-label')); ?> <?php echo Form::text('phone', Input::old('phone'), ['class' => 'form-control','id' => 'phone','data-parsley-required-message' => trans("all.please_enter_phone_number"),'data-parsley-group' => 'block-0']); ?>

                            <div class="form-control-feedback">
                                <i class=" icon-mobile3 text-muted"></i>
                            </div>
                            <span class="help-block">
                                <small><?php echo trans("all.enter_your_phone_number"); ?></small>
                                <?php if($errors->has('phone')): ?>
                                <strong><?php echo e($errors->first('phone')); ?></strong>
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>
                
                    <div class="col-md-6">
                        <div class="required form-group has-feedbackX has-feedback-leftx <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('email', trans("register.email"), array('class' => 'control-label')); ?> <?php echo Form::email('email', Input::old('email'), ['class' => 'form-control','required' => 'required','id' => 'email','data-parsley-required-message' => trans("all.please_enter_email"),'data-parsley-group' => 'block-0']); ?>

                            <div class="form-control-feedback">
                                <i class="icon-mail5 text-muted"></i>
                            </div>
                            <span class="help-block">
                                <small><?php echo trans("all.type_your_email"); ?></small>
                                <?php if($errors->has('email')): ?>
                                <strong><?php echo e($errors->first('email')); ?></strong>
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>

                           
                </div>


                <div class="row">
                    <!-- begin col-6 -->
             
                    <!-- begin col-4 -->
                 
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="hidden" name="transaction_pass" class="form-control" placeholder="Transaction Password " value="<?php echo e($transaction_pass); ?>" />
                        </div>
                    </div>
                </div>
            </fieldset>
            <h6 class="width-full">  <?php echo e(trans('register.login_information')); ?>   </h6>
            <fieldset>
                <div class="row">
                    <div class="col-md-4">
                        <div class="required form-group has-feedbackX has-feedback-leftx <?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('username', trans("register.username"), array('class' => 'control-label')); ?> <?php echo Form::text('username', Input::old('username'), ['class' => 'form-control','required' => 'required','id' => 'username','data-parsley-required-message' => trans("all.please_enter_username"),'data-parsley-type' => 'alphanum','data-parsley-group' => 'block-1']); ?>

                            <div class="form-control-feedback">
                                <i class="icon-user-check text-muted"></i>
                            </div>
                            <span class="help-block">
                                <small><?php echo trans("all.desired_username_used_to_login"); ?></small>
                                <?php if($errors->has('username')): ?>
                                <strong><?php echo e($errors->first('username')); ?></strong>
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4">
                        <div class="passy required form-group has-feedbackX has-feedback-leftx <?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('password', trans("register.password"), array('class' => 'control-label')); ?>

                            <div class="input-group label-indicator-absolute">
                                <?php echo Form::text('password','', ['class' => 'form-control pwstrength','required' => 'required','id' => 'password','data-parsley-required-message' => trans("all.please_enter_password"),'data-parsley-minlength'=>'6','data-parsley-group' => 'block-1']); ?>


                               
                                <span class="label password-indicator-label-abs"></span>
                                 <span class="input-group-addon copylink">
                                   <a class="btn btn-link btn-copy" style="margin: 0 auto;padding: 0px;font-size: 12px;" data-clipboard-action="copy" data-clipboard-target="#password" data-popup="tooltip" title="copy password" data-placement="top"><i class="fa fa-copy"></i>
                                   </a>
                               </span>
                                <span class="input-group-addon">
                                                    <a class="generate-pass" href="javascript:void(0)" data-popup="tooltip" title="<?php echo e(trans('register.generate_a_password')); ?>" data-placement="top" ><i class="icon-googleplus5"></i></a>
                                                </span>
                            </div>
                            <div class="form-control-feedback">
                                <i class="icon-user-check text-muted"></i>
                            </div>
                            <span class="help-block">
                                <small><?php echo trans("all.a_secure_password"); ?></small>
                                <?php if($errors->has('password')): ?>
                                <strong><?php echo e($errors->first('password')); ?></strong>
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4">
                        <div class="required form-group has-feedbackX has-feedback-leftx <?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('confirm_password', trans("register.confirm_password"), array('class' => 'control-label')); ?> <?php echo Form::text('confirm_password','', ['class' => 'form-control','required' => 'required','id' => 'confirm_password','data-parsley-equalto' => '#password','data-parsley-required-message' => trans("all.please_enter_password_confirmation"),'data-parsley-minlength'=>'6','data-parsley-group' => 'block-1']); ?>

                            <div class="form-control-feedback">
                                <i class="icon-user-check text-muted"></i>
                            </div>
                            <span class="help-block">
                                <small><?php echo trans("all.confirm_your_password"); ?></small>
                                <?php if($errors->has('confirm_password')): ?>
                                <strong><?php echo e($errors->first('confirm_password')); ?></strong>
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>
                    <!-- end col-6 -->
                </div>
                <div class="bhoechie-tab-content active">
                    <div class="text-center">
                        <!--  <div class="text-center">
                            <h1><?php echo e(trans('register.confirm_registration')); ?></h1>
                            
                            <p><button class="btn btn-success btn-lg" role="button"><?php echo e(trans('register.click_to_complete_registration')); ?></button></p>
                        </div> -->
                    </div>
                </div>
                <!-- end row -->
            </fieldset>
            <h6 class="width-full">  <?php echo e(trans('register.payment')); ?>   </h6>
            <fieldset>
             <div class="2_box">
                <div class="m-b-0 text-center">
                    <div class="containerX">
                     <div class="text-center">
                        <h1> <p class="text-success">
                            
                            <?php echo e(trans('register.joining_fee')); ?>:
                            <span ><?php echo e($joiningfee); ?></span>
                            
                        </p></h1>
                        <h3><?php echo e(trans('register.confirm_registration')); ?></h3>
                        <p>
                            <button class="btn btn-success btn-lg" role="button">Card payment confirmation</button>
                        </p>
                    </div>
                        </div>
                    </div>
                </div>
    </div>
    </div>
    </fieldset>
    </form>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?> <?php $__env->startSection('overscripts'); ?> ##parent-placeholder-cf3aa7a97dccc92dae72236fb07ec31668edf210##
<script type="text/javascript">
var joiningfe = <?php echo e($joiningfee); ?>;
</script>
<?php $__env->stopSection(); ?> <?php $__env->startSection('scripts'); ?> ##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##

<script type="text/javascript">
$(document).on('submit', 'form', function() {
   $(this).find('button:submit, input:submit').attr('disabled','disabled');
 });
</script>
<script src="//www.paypalobjects.com/api/checkout.js" async></script>

<script src="https://checkout.stripe.com/checkout.js"></script>
<script type="text/javascript">
       $(document).ready(function() {
           $('#stripe_btn').on('click', function(event) {
               event.preventDefault();
               var $button = $(this),
                   $form = $button.parents('form');
               var opts = $.extend({}, $button.data(), {
                   token: function(result) {
                       $form.append($('<input>').attr({ type: 'hidden', name: 'stripeToken', value: result.id })).submit();
                   }
               });
               StripeCheckout.open(opts);
           });
       });
</script>
<script type="text/javascript">
   $(document).ready(function() {
       $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
          e.preventDefault();
          $(this).siblings('a.active').removeClass("active");
          $(this).addClass("active");
          var index = $(this).index();
          $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
          $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
          $('#payment').val($(this).attr('payment'));
   });
  });
</script>

<script type="text/javascript">
$(document).ready(function(){
$("#package").change(function(){
$(this).find("option:selected").each(function(){
var optionValue = $(this).attr("value");
$('#pack_new').val(optionValue);


});
}).change();
});

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app.admin.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>