<?php $__env->startSection('content'); ?>
    <main class="flex flex-column flex-grow trans-margin-left trans-0-3">
        <form method="POST" action="<?php echo e(route('register')); ?>" class="relative overflow-hidden margin-top-4 margin-top-0--lg">
            <?php echo csrf_field(); ?>
            <svg viewBox="0 0 597 580" fill="none" xmlns="http://www.w3.org/2000/svg"
                 class="icon-globe-gray-hero absolute top-0 left-0">
                <path
                    d="M370.782 97.509c29.2 27.153 55.302 39.251 68.676 44.179-8.785-16.707-19.306-32.766-31.499-47.887-6.626-8.203-13.703-16.162-21.324-23.783-7.406-7.406-15.102-14.295-23.08-20.771a295.156 295.156 0 00-49.182-32.363c5.2 12.352 20.893 45.278 50.75 75.134a173.928 173.928 0 005.659 5.49z"
                    fill="url(#globe-gray_svg__paint0_linear)"></path>
                <path
                    d="M445.578 405.993c-3.933 8.344-8.241 16.575-12.962 24.619-37.224-7.603-121.406-37.591-238.682-154.867C72.576 154.387 37.332 61.476 27.345 23.295a289.043 289.043 0 0124.29-12.709c6.458 28.026 36.08 121.397 161.08 246.397 125.029 125.029 208.15 145.64 232.863 149.01z"
                    fill="url(#globe-gray_svg__paint1_linear)"></path>
                <path
                    d="M390.549 485.857c-22.995-4.693-119.369-31.218-250.949-162.798C8.62 192.08-22.944 90.366-28.979 65.822a113.8 113.8 0 01-1.954 1.844c-.819.761-1.637 1.522-2.43 2.314-5.96 5.96-11.516 12.136-16.847 18.462 13.422 42.349 54.044 136.395 171.029 253.38 115.07 115.07 204.996 153.186 246.725 165.556 6.533-5.5 12.934-11.244 19.072-17.382 1.064-1.035 2.061-2.115 3.052-3.188l.001-.002.005-.005.702-.758.173-.186z"
                    fill="url(#globe-gray_svg__paint2_linear)"></path>
                <path
                    d="M-80.61 134.536l-1.671.131v.038a293.52 293.52 0 00-17.486 36.877C-86.4 217.835-49.027 305.48 54.583 409.09c96.852 96.852 178.368 134.48 225.682 149.132a298.996 298.996 0 0039.261-17.899c-24.685-3.867-122.457-26.29-246.162-149.995C-69.61 247.353-80.536 135.643-80.61 134.536z"
                    fill="url(#globe-gray_svg__paint3_linear)"></path>
                <path
                    d="M-116.248 231.951a299.873 299.873 0 00-1.859 82.84c19.138 41.795 52.918 96.148 113.156 156.386 53.734 53.734 101.827 84.726 140.459 102.803 30.363 4.215 61.233 3.698 91.493-1.483-12.446-.244-99.321-6.232-213.18-120.091-114.282-114.301-128.54-206.798-130.069-220.455z"
                    fill="url(#globe-gray_svg__paint4_linear)"></path>
                <path
                    d="M229.727 599.056c-.193.005-.452.013-.652.013.154-.02.303-.054.456-.089l.164-.036c.094-.021.19-.039.29-.054l-.009.16-.239.005-.01.001z"
                    fill="url(#globe-gray_svg__paint5_linear)"></path>
                <path
                    d="M-54.001 469.375c6.954 9.527 15.308 19.457 25.323 28.852 6.617 6.167 12.961 11.197 19.062 15.703 12.22 15.13 22.76 31.17 31.527 47.914-13.375-4.946-39.477-17.026-68.666-44.207a196.572 196.572 0 01-5.688-5.463c-29.866-29.865-45.531-62.8-50.778-75.161a295.842 295.842 0 0149.22 32.362z"
                    fill="url(#globe-gray_svg__paint6_linear)"></path>
                <path
                    d="M471.145 243.449a308.903 308.903 0 00-4.806-27.97c-26.74-5.847-75.03-24.572-134.302-83.843-59.102-59.103-83.627-111.523-93.698-141.942a296.389 296.389 0 00-29.209-4.675c8.138 31.096 32.428 93.7 104.117 165.388 70.994 70.957 128.68 88.79 157.898 93.042z"
                    fill="url(#globe-gray_svg__paint7_linear)"></path>
                <path
                    d="M471.323 315.035c-1.042 8.775-2.44 17.532-4.251 26.214-35.085-5.124-115.014-28.157-215.79-128.933-96.59-96.589-123.151-182-130.519-223.87a297.388 297.388 0 0126.468-3.811c7.02 37.862 32.174 118.261 122.823 208.909 97.199 97.2 171.967 117.342 201.269 121.491z"
                    fill="url(#globe-gray_svg__paint8_linear)"></path>
                <defs>
                    <linearGradient id="globe-gray_svg__paint0_linear" x1="-44.229" y1="80.388"
                                    x2="380.035" y2="504.653" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#EDEDF1"></stop>
                        <stop offset="1" stop-color="#EDEDF1" stop-opacity="0"></stop>
                    </linearGradient>
                    <linearGradient id="globe-gray_svg__paint1_linear" x1="-44.229" y1="80.388"
                                    x2="380.035" y2="504.653" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#EDEDF1"></stop>
                        <stop offset="1" stop-color="#EDEDF1" stop-opacity="0"></stop>
                    </linearGradient>
                    <linearGradient id="globe-gray_svg__paint2_linear" x1="-44.229" y1="80.388"
                                    x2="380.035" y2="504.653" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#EDEDF1"></stop>
                        <stop offset="1" stop-color="#EDEDF1" stop-opacity="0"></stop>
                    </linearGradient>
                    <linearGradient id="globe-gray_svg__paint3_linear" x1="-44.229" y1="80.388"
                                    x2="380.035" y2="504.653" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#EDEDF1"></stop>
                        <stop offset="1" stop-color="#EDEDF1" stop-opacity="0"></stop>
                    </linearGradient>
                    <linearGradient id="globe-gray_svg__paint4_linear" x1="-44.229" y1="80.388"
                                    x2="380.035" y2="504.653" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#EDEDF1"></stop>
                        <stop offset="1" stop-color="#EDEDF1" stop-opacity="0"></stop>
                    </linearGradient>
                    <linearGradient id="globe-gray_svg__paint5_linear" x1="-44.229" y1="80.388"
                                    x2="380.035" y2="504.653" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#EDEDF1"></stop>
                        <stop offset="1" stop-color="#EDEDF1" stop-opacity="0"></stop>
                    </linearGradient>
                    <linearGradient id="globe-gray_svg__paint6_linear" x1="-44.229" y1="80.388"
                                    x2="380.035" y2="504.653" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#EDEDF1"></stop>
                        <stop offset="1" stop-color="#EDEDF1" stop-opacity="0"></stop>
                    </linearGradient>
                    <linearGradient id="globe-gray_svg__paint7_linear" x1="-44.229" y1="80.388"
                                    x2="380.035" y2="504.653" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#EDEDF1"></stop>
                        <stop offset="1" stop-color="#EDEDF1" stop-opacity="0"></stop>
                    </linearGradient>
                    <linearGradient id="globe-gray_svg__paint8_linear" x1="-44.229" y1="80.388"
                                    x2="380.035" y2="504.653" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#EDEDF1"></stop>
                        <stop offset="1" stop-color="#EDEDF1" stop-opacity="0"></stop>
                    </linearGradient>
                </defs>
            </svg>
            <div class="relative box padding-y-4">
                <h1
                    class="flex justify-center items-center font-normal margin-top-3 margin-bottom-0">
                    <svg data-v-1314f2ac="" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-3 fill-primary margin-right-3"><path data-v-1314f2ac="" d="M.783 1.826L9 0l8.217 1.826a1 1 0 01.783.976v9.987a6 6 0 01-2.672 4.992L9 22l-6.328-4.219A6 6 0 010 12.79V2.802a1 1 0 01.783-.976zM2 3.604v9.185a4 4 0 001.781 3.328L9 19.597l5.219-3.48A4 4 0 0016 12.79V3.604L9 2.05 2 3.604zM9 10a2.5 2.5 0 110-5 2.5 2.5 0 010 5zm-4.473 5a4.5 4.5 0 018.946 0H4.527z"></path></svg>
                    Регистрация
                </h1>
                <div class="flex--sm justify-center">
                    <div class="grid grid-row-gap-4 padding-y-4">
                        <ul class="errors grid-column-12">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <div class="grid-column-12">
                            <div class="field">
                                <div class="flex justify-between">
                                    <label for="input_5lv2ka3t" class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                        Имя и фамилия
                                    </label>
                                </div>
                                <div class="relative">
                                    <div class="field__input-wrapper flex items-center overflow-hidden">
                                        <input id="input_5lv2ka3t" name="name" type="text" placeholder="Введите свое имя и фамилию" class="field__input">
                                    </div>
                                    <div class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex"></div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-column-12">
                            <div class="field">
                                <div class="flex justify-between">
                                    <label for="input_5lv2ka3t" class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                        E-mail
                                    </label>
                                </div>
                                <div class="relative">
                                    <div class="field__input-wrapper flex items-center overflow-hidden">
                                        <input id="input_5lv2ka3t" autocomplete="off" name="email" type="email" placeholder="Введите свой E-mail" class="field__input">
                                    </div>
                                    <div class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex"></div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-column-12">
                            <div class="field">
                                <div class="relative">
                                    <div class="flex justify-between">
                                        <label class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                            Пароль
                                        </label>
                                    </div>
                                    <div class="field__input-wrapper flex items-center overflow-hidden">
                                        <input id="input_f61623m9" autocomplete="" name="password" type="password" placeholder="Введите ваш пароль" class="field__input">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-column-12">
                            <div class="field">
                                <div class="relative">
                                    <div class="flex justify-between">
                                        <label class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                            Повторите пароль
                                        </label>
                                    </div>
                                    <div class="field__input-wrapper flex items-center overflow-hidden">
                                        <input id="input_f61623m9" autocomplete="" name="password_confirmation" type="password" placeholder="Повторите ваш пароль" class="field__input">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-column-12 bg-dark padding-3 border-rounded-3">
                            <div class="field">
                                <div class="relative">
                                    <div class="flex flex-column justify-between">
                                        <label class="field__label color-orange flex font-sm font-medium margin-bottom-1">
                                            Создайте финансовый пароль для защиты ваших данных
                                        </label>
                                        <small class="color-white margin-bottom-2">
                                            Финансовый пароль никуда не отправляется, и вам нужно сохранить его и хранить в надежном месте, так как второй раз вы не сможете получить его
                                        </small>
                                    </div>
                                    <div class="field__input-wrapper bg-white flex items-center overflow-hidden">
                                        <input id="input_f61623m9" autocomplete="" name="fin_password" type="password" placeholder="Придумайте финансовый пароль" class="field__input">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-column-12">
                            <div class="field">
                                <div class="relative">
                                    <div class="flex justify-between">
                                        <label class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                            Код приглашения
                                        </label>
                                    </div>
                                    <div class="field__input-wrapper flex items-center overflow-hidden">
                                        <input id="input_f61623m9" autocomplete="" name="invite" type="text" placeholder="Если есть, укажите код приглашения" class="field__input" value="<?php echo e(request('code') ?? old('code')); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-column-12">
                            <div class="field">
                                <div class="relative">
                                    <div class="flex justify-between">
                                        <label class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                            Страна
                                        </label>
                                    </div>
                                    <div class="field__input-wrapper flex items-center overflow-hidden">
                                        <select class="no-border" name="country">
                                            <option value="Russia">Russia</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="USA">USA</option>
                                            <option value="Poland">Poland</option>
                                            <option value="China">China</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Japan"> Japan</option>
                                            <option value="Germany"> Germany</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Austria">Austria</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Australia">Australia</option>
                                            <option value="France">France</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Finland">Finland</option>
                                            <option value="Spain">Spain</option>
                                            <option value="UAE">UAE</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Republic of Kazakhstan">Kazakhstan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div data-v-27920d84="" class="grid-column-12">
                            <div data-v-27920d84="" class="flex">
                                <div data-v-acf68fb2="" data-v-27920d84="" tabindex="0" class="base-checkbox flex items-start no-outline no-select padding-y-2 cursor-pointer">
                                    <input type="hidden" name="agreement">
                                    <div data-v-acf68fb2="" class="base-checkbox__box flex justify-center items-center margin-right-2 flex-no-shrink"></div>
                                    <div data-v-acf68fb2=""> Я согласен с <a data-v-27920d84="" href="/documents/Условия и положения.pdf" class="margin-x-1" target="_blank" data-v-acf68fb2="">Условия и положения</a> и <a data-v-27920d84="" href="/documents/Политика AML.pdf" class="margin-x-1" target="_blank" data-v-acf68fb2="">Политика AML</a></div>
                                </div>
                            </div>
                        </div>

                        <div data-v-27920d84="" class="grid-column-12">
                            <div data-v-27920d84="" class="flex">
                                <div data-v-acf68fb2="" data-v-27920d84="" tabindex="0" class="base-checkbox flex items-start no-outline no-select padding-y-2 cursor-pointer">
                                    <input type="hidden" name="finance_agreement">
                                    <div data-v-acf68fb2="" class="base-checkbox__box flex justify-center items-center margin-right-2 flex-no-shrink"></div>
                                    <div data-v-acf68fb2=""> Я сохранил/а финансовый пароль в надёжном месте</div>
                                </div>
                            </div>
                        </div>

                        <div class="grid-column-12">
                            <button class="width-full button button--primary">
                                <span class="button__content">
                                    <svg viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-1-25 fill-white margin-right-2"><path d="M9 9V6l5 4-5 4v-3H0V9h9zm-7.542 4h2.124A8.003 8.003 0 0019 10 8 8 0 003.582 7H1.458C2.732 2.943 6.522 0 11 0c5.523 0 10 4.477 10 10s-4.477 10-10 10c-4.478 0-8.268-2.943-9.542-7z" fill="#fff"></path></svg>
                                    Регистрация
                                </span>
                            </button>
                        </div>

                        <div class="grid-column-12 text-center">
                            <hr class="margin-top-0 margin-bottom-4">
                            <div>Уже зарегистированы?</div>
                            <a href="<?php echo e(route('login')); ?>" class="button button--ghost">
                                <span class="button__content">
                                    <svg data-v-1314f2ac="" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-1-25 fill-primary margin-right-2"><path data-v-1314f2ac="" d="M9 9V6l5 4-5 4v-3H0V9h9zm-7.542 4h2.124A8.003 8.003 0 0019 10 8 8 0 003.582 7H1.458C2.732 2.943 6.522 0 11 0c5.523 0 10 4.477 10 10s-4.477 10-10 10c-4.478 0-8.268-2.943-9.542-7z" fill="#fff"></path></svg>
                                    Авторизация
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('old-content'); ?>
<main _ngcontent-c0="" class="page-content">
    <div _ngcontent-c0="" class="page-content__content  user-page"><!---->
        <app-registration _nghost-c6=""><!---->
            <div class="user-page__auth auth g-page-wrap fadeInUp" data-show-animation="fadeInUp">
                <div class="auth__content  g-content-wrap"><h2
                                                                                class="auth__title">Регистрация</h2>
                    <!---->
                    <form method="post" action="<?php echo e(route('register')); ?>" class="auth__form ng-untouched ng-pristine ng-invalid">
                        <?php echo csrf_field(); ?>
                        <ul class="errors">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <div class="auth__inputs-wrap">
                            <div class="auth__form-group form-group"><label
                                                                                             class="form-group__label"
                                                                                             for="registr-input">Имя*</label><input
                                    class="form-group__input ng-untouched ng-pristine ng-invalid"
                                    name="name" id="registr-input" type="text"><!----></div>
                            <div class="auth__form-group form-group"><label
                                                                                             class="form-group__label"
                                                                                             for="registr-input-2">E-mail*</label><input
                                    class="form-group__input ng-untouched ng-pristine ng-invalid"
                                    name="email" id="registr-input-2" type="email"><!----></div>
                            <div class="auth__form-group form-group"><label
                                                                                             class="form-group__label"
                                                                                             for="registr-input-3">Пароль*</label><input
                                    class="form-group__input ng-untouched ng-pristine ng-invalid"
                                    name="password" id="registr-input-3" type="password"><!----></div>
                            <div class="auth__form-group form-group"><label
                                                                                             class="form-group__label"
                                                                                             for="registr-input-4">Подтверждение
                                    пароля*</label><input
                                                          class="form-group__input ng-untouched ng-pristine ng-invalid"
                                                          name="password_confirmation" id="registr-input-4"
                                                          type="password"><!----><!----></div>
                            <div class="auth__form-group form-group"><label
                                                                                             class="form-group__label"
                                                                                             for="registr-input-5">Код приглашения</label>
                                <div><input class="form-group__input"
                                            name="invite" value="<?php echo e(request()->get('code') ?? old('invite')); ?>"
                                            <?php if(request()->has('code')): ?> readonly <?php endif; ?>
                                            id="registr-input-5" type="text"></div></div>
                        </div><!---->

                        <button class="auth__btn btn" type="submit"><!---->Зарегистрироваться
                        </button>
                        <div class="auth__links">
                            <a href="<?php echo e(route('login')); ?>">Войти</a>
                        </div>
                    </form>
                </div>
            </div><!----></app-registration>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/d33kei/Documents/Lar_Cry/invest/resources/views/auth/register.blade.php ENDPATH**/ ?>