<?php echo Form::open(['url' => 'admin/store/registration-settings', 'class' =>'wt-formtheme wt-userform', 'id'
    =>'registration-setting-form']); ?>

    <div class="wt-location wt-tabsinfo">
        <div class="wt-tabscontenttitle">
            <h2><?php echo e(trans('lang.registeration_form_type')); ?></h2>
        </div>
        <div class="wt-settingscontent">
            <div class="wt-formtheme wt-userform">
                <div class="form-group">
                    <span class="wt-select">
                        <select class="form-control" name="registration[0][registration_type]" v-model="reg_form_type">
                            <?php $__currentLoopData = $registration_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $selected = $key == $selected_registration_type ? 'selected' : ''; ?>
                                <option value="<?php echo e($key); ?>" <?php echo e($selected); ?>> <?php echo e($type); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="wt-location wt-tabsinfo" v-if="reg_form_type == 'single'">
        <div class="wt-tabscontenttitle">
            <h2><?php echo e(trans('lang.verification_type')); ?></h2>
        </div>
        <div class="wt-settingscontent">
            <div class="wt-formtheme wt-userform">
                <div class="form-group">
                    <span class="wt-select">
                        <select class="form-control" name="registration[0][verification_type]">
                            <?php $__currentLoopData = $verification_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $selected = $key == $selected_verification_type ? 'selected' : ''; ?>
                                <option value="<?php echo e($key); ?>" <?php echo e($selected); ?>> <?php echo e($type); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="wt-location wt-tabsinfo la-formstepone la-formsteps">
        <div class="wt-tabscontenttitle">
            <h2><?php echo e(trans('lang.registration_step1')); ?></h2>
        </div>
        <div class="wt-settingscontent">
            <div class="wt-description"><p><?php echo e(trans('lang.reg_step_1')); ?></p></div>
            <div class="wt-formtheme wt-userform">
                <div class="form-group">
                    <?php echo Form::text('registration[0][step1-title]', $reg_one_title, array('class' => 'form-control', 'placeholder' => trans('lang.title'))); ?>

                </div>
            </div>
        </div>
        <div class="wt-settingscontent">
            <div class="wt-formtheme wt-userform">
                <div class="form-group">
                    <?php echo Form::textarea('registration[0][step1-subtitle]', $reg_one_subtitle, array('class' => 'form-control', 'placeholder' => trans('lang.description'))); ?>

                </div>
            </div>
        </div>
    </div>
    <div class="wt-location wt-tabsinfo la-formsteps" v-if="reg_form_type == 'multiple'">
        <div class="wt-tabscontenttitle">
            <h2><?php echo e(trans('lang.registration_step2')); ?></h2>
        </div>
        <div class="wt-settingscontent">
            <div class="wt-description"><p><?php echo e(trans('lang.reg_step_2')); ?></p></div>
            <div class="wt-formtheme wt-userform">
                <div class="form-group">
                    <?php echo Form::text('registration[0][step2-title]', $reg_two_title, array('class' => 'form-control', 'placeholder' => trans('lang.title'))); ?>

                </div>
            </div>
        </div>
        <div class="wt-settingscontent">
            <div class="wt-formtheme wt-userform">
                <div class="form-group">
                    <?php echo Form::textarea('registration[0][step2-subtitle]', $reg_two_subtitle, array('class' => 'form-control', 'placeholder' => trans('lang.description'))); ?>

                </div>
            </div>
        </div>
        <div class="wt-settingscontent">
            <div class="wt-formtheme wt-userform">
                <div class="form-group">
                    <?php echo Form::textarea('registration[0][step2-term-note]', $term_note, array('class' => 'form-control', 'placeholder' => trans('lang.term_note'))); ?>

                </div>
            </div>
        </div>
        <div class="wt-settingscontent la-settingsradio">
            <div class="wt-description"><p><?php echo e(trans('lang.show_emplyr_inn_sec')); ?></p></div>
            <switch_button v-model="show_emplyr_inn_sec"><?php echo e(trans('lang.show_hide')); ?></switch_button>
            <input type="hidden" :value="show_emplyr_inn_sec" name="registration[0][show_emplyr_inn_sec]">
        </div>
    </div>
    <div class="wt-location wt-tabsinfo la-formsteps" v-if="reg_form_type == 'multiple'">
        <div class="wt-tabscontenttitle">
            <h2><?php echo e(trans('lang.registration_step3')); ?></h2>
        </div>
        <div class="wt-settingscontent">
            <div class="wt-description"><p><?php echo e(trans('lang.reg_step_3')); ?></p></div>
            <div class="wt-formtheme wt-userform">
                <div class="form-group">
                    <?php echo Form::text('registration[0][step3-title]', $reg_three_title, array('class' => 'form-control', 'placeholder' => trans('lang.title'))); ?>

                </div>
            </div>
        </div>
        <div class="wt-settingscontent">
            <div class="wt-formtheme wt-userform">
                <div class="form-group">
                    <?php echo Form::textarea('registration[0][step3-subtitle]', $reg_three_subtitle, array('class' => 'form-control', 'placeholder' => trans('lang.description'))); ?>

                </div>
            </div>
        </div>
        <div class="wt-settingscontent la-footer-settings">
            <div class="wt-formtheme wt-userform">
                <div class="form-group">
                    <span class="wt-select">
                        <?php echo Form::select('registration[0][step3-page]', $pages, $reg_page, array('class' => '', 'placeholder' => trans('lang.select_pages'))); ?>

                    </span>
                </div>
            </div>
        </div>
        <?php if(file_exists(resource_path('views/extend/back-end/admin/settings/register/image.blade.php'))): ?>
            <?php echo $__env->make('extend.back-end.admin.settings.register.image', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php else: ?>
            <?php echo $__env->make('back-end.admin.settings.register.image', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endif; ?>
    </div>
    <div class="wt-location wt-tabsinfo la-formsteps" v-if="reg_form_type == 'multiple'">
        <div class="wt-tabscontenttitle">
            <h2><?php echo e(trans('lang.registration_step4')); ?></h2>
        </div>
        <div class="wt-settingscontent">
            <div class="wt-description"><p><?php echo e(trans('lang.reg_step_4')); ?></p></div>
            <div class="wt-formtheme wt-userform">
                <div class="form-group">
                    <?php echo Form::text('registration[0][step4-title]', $reg_four_title, array('class' => 'form-control', 'placeholder' => trans('lang.title'))); ?>

                </div>
            </div>
        </div>
        <div class="wt-settingscontent">
            <div class="wt-formtheme wt-userform">
                <div class="form-group">
                    <?php echo Form::textarea('registration[0][step4-subtitle]', $reg_four_subtitle, array('class' => 'form-control', 'placeholder' => trans('lang.description'))); ?>

                </div>
            </div>
        </div>
    </div>
    <div class="wt-location wt-tabsinfo">
        <div class="wt-tabscontenttitle">
                <h2><?php echo e(trans('lang.registration_form_banner')); ?></h2>
        </div>
        <div class="wt-settingscontent">
            <div class="wt-settingscontent la-settingsradio">
                <div class="wt-description"><p><?php echo e(trans('lang.reg_form_banner_note')); ?></p></div>
                <switch_button v-model="show_reg_form_banner"><?php echo e(trans('lang.enable_disable')); ?></switch_button>
                <input type="hidden" :value="show_reg_form_banner" name="registration[0][show_reg_form_banner]">
            </div>
        </div>
    </div>
    <?php if(file_exists(resource_path('views/extend/back-end/admin/settings/register/reg_form_banner.blade.php'))): ?>
        <?php echo $__env->make('extend.back-end.admin.settings.register.reg_form_banner', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('back-end.admin.settings.register.reg_form_banner', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
    <div class="wt-updatall la-updateall-holder">
        <i class="ti-announcement"></i>
        <span><?php echo e(trans('lang.save_changes_note')); ?></span>
        <?php echo Form::submit(trans('lang.btn_save'),['class' => 'wt-btn']); ?>

    </div>
    
<?php echo Form::close(); ?>
