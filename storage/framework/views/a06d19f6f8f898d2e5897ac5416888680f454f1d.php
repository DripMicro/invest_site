<?php $__env->startSection('content'); ?>
    <div class="container-fluid py-4">

        <div class="row">
            <?php if(session()->has('password')): ?>
                <div class="col-12">
                    <div class="alert alert-success">
                        Новый пароль: <b class="badge"><?php echo e(session()->get('password')); ?></b>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(session()->has('success')): ?>
                <div class="col-12">
                    <div class="alert alert-success">
                        Данные успешно сохранены
                    </div>
                </div>
            <?php endif; ?>

            <?php if($errors->isNotEmpty()): ?>
                <div class="col-12">
                    <div class="alert alert-danger">
                        <?php echo e(implode(', ', $errors->all())); ?>

                    </div>
                </div>
            <?php endif; ?>

            <div class="col-lg-6">
                <form method="POST" action="<?php echo e(route('admin.users.update', $user)); ?>" class="row justify-content-center">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PATCH'); ?>
                    <div class="col-lg-12">
                        <?php echo $__env->make('admin.users._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="form-group row">
                            <div class="col-12 text-center">
                                <button class="btn btn-success"><?php echo app('translator')->get('Сохранить'); ?></button>
                                <a href="<?php echo e(route('admin.users.password', $user)); ?>" class="btn btn-outline-danger">Сбросить пароль</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        Счета пользователя
                    </div>
                    <div class="card-body p-0">
                        <table class="table m-0">
                            <thead>
                            <tr>
                                <th>Валюта</th>
                                <th>Баланс депозитный</th>
                                <th>Баланс</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $user->accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($account->currency); ?></td>
                                    <td><?php echo e($account->deposits); ?></td>
                                    <td>
                                        <form method="post" action="<?php echo e(route('admin.accounts.update', $account)); ?>" class="form-inline">
                                            <?php echo csrf_field(); ?>
                                            <input type="text" name="balance" class="form-control" value="<?php echo e($account->balance / 100); ?>" placeholder="Сумма">

                                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <?php if($user->is_verified == 1): ?>
                <div class="card my-3">
                    <div class="card-header">
                        Ожидает верификации
                    </div>
                    <div class="card-body p-0">
                        <table class="table mb-0">
                            <tbody>
                                <tr>
                                    <td>Первая страница паспорта:</td>
                                    <td><a href="<?php echo e(asset($user->passport_page_first)); ?>" target="_blank"><i class="fas fa-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Последняя страница паспорта:</td>
                                    <td><a href="<?php echo e(asset($user->passport_page_second)); ?>" target="_blank"><i class="fas fa-eye"></i></a></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2">
                                        <a href="<?php echo e(route('admin.users.verify', $user)); ?>" class="btn btn-sm btn-success"><i class="fas fa-check"></i></a>
                                        <a href="<?php echo e(route('admin.users.notVerify', $user)); ?>" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <?php endif; ?>
            </div>

            <div class="col-8">
                <div class="card">
                    <div class="card-header">Депозиты пользователя</div>
                    <div class="card-body p-0">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <td>Сумма</td>
                                    <td>Валюта</td>
                                    <td>Дата начала</td>
                                    <td>Дата окончания</td>
                                    <td>Процент</td>
                                    <td>Реферальный процент</td>
                                    <td>Статус</td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $user->deposits()->latest('start_time')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deposit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($deposit->amount / 100); ?></td>
                                    <td>
                                        <?php if($deposit->currency == 'usd'): ?>
                                            <i class="fas fa-dollar-sign"></i>
                                        <?php elseif($deposit->currency == 'eur'): ?>
                                            <i class="fas fa-euro-sign"></i>
                                        <?php else: ?>
                                            <i class="fas fa-ruble-sign"></i>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e($deposit->start_time->format('d.m.Y')); ?></td>
                                    <td><?php echo e($deposit->end_time->format('d.m.Y')); ?></td>
                                    <td>
                                        <form method="post" action="<?php echo e(route('admin.deposits.update', $deposit)); ?>" class="form-inline">
                                            <?php echo csrf_field(); ?>
                                            <input type="text" name="percent" class="form-control" value="<?php echo e($deposit->percent); ?>" placeholder="%">

                                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i></button>
                                        </form>
                                    </td>
                                    <td>
                                        <form method="post" action="<?php echo e(route('admin.deposits.update', $deposit)); ?>" class="form-inline">
                                            <?php echo csrf_field(); ?>
                                            <input type="text" name="referal_percent" class="form-control" value="<?php echo e($deposit->referal_percent); ?>" placeholder="%">

                                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i></button>
                                        </form>
                                    </td>
                                    <td>
                                        <?php if($deposit->status == \App\Deposit::STATUS_OPENED): ?>
                                            <span class="deposit-opened">Открытый</span>
                                        <?php elseif($deposit->status == \App\Deposit::STATUS_CLOSED): ?>
                                            <span class="deposit-closed">Закрытый</span>
                                        <?php elseif($deposit->status == \App\Deposit::STATUS_CANCELED): ?>
                                            <span class="deposit-canceled">Отменен</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if($deposit->status == \App\Deposit::STATUS_OPENED): ?>
                                        <a href="<?php echo e(route('admin.deposits.close', $deposit)); ?>" class="btn btn-sm btn-danger"><i class="fas fa-door-closed"></i></a>
                                        <?php endif; ?>
                                        <a href="<?php echo e(route('admin.deposits.destroy', $deposit)); ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="8">Депозитов нет</td>
                                </tr>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        Новый депозит
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('admin.deposits.store', $user)); ?>" class="row justify-content-center">
                            <?php echo csrf_field(); ?>
                            <div class="col-lg-12">
                                 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'admin.components._form-group','data' => ['name' => 'amount','lable' => 'Сумма']]); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'amount','lable' => 'Сумма']); ?>
                                    <input type="text" class="form-control col-lg-8 <?php echo e($errors->has('amount') ? 'is-invalid' : ''); ?>"
                                           name="amount"
                                           value="<?php echo e(old('amount')); ?>">
                                 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                                 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'admin.components._form-group','data' => ['name' => 'start_time','lable' => 'Дата начала']]); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'start_time','lable' => 'Дата начала']); ?>
                                    <input type="date" class="form-control col-lg-8 <?php echo e($errors->has('start_time') ? 'is-invalid' : ''); ?>"
                                           name="start_time"
                                           value="<?php echo e(old('start_time')); ?>">
                                 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                                 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'admin.components._form-group','data' => ['name' => 'days','lable' => 'Дни']]); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'days','lable' => 'Дни']); ?>
                                    <input type="text" class="form-control col-lg-8 <?php echo e($errors->has('days') ? 'is-invalid' : ''); ?>"
                                           name="days"
                                           value="<?php echo e(old('days')); ?>">
                                 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                                 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'admin.components._form-group','data' => ['name' => 'currency','lable' => 'Валюта']]); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'currency','lable' => 'Валюта']); ?>
                                    <select class="form-control col-lg-8 <?php echo e($errors->has('currency') ? 'is-invalid' : ''); ?>"
                                           name="currency">
                                        <option value="<?php echo e(\App\Account::CURRENCY_RUB); ?>">RUB</option>
                                        <option value="<?php echo e(\App\Account::CURRENCY_USD); ?>">USD</option>
                                        <option value="<?php echo e(\App\Account::CURRENCY_EUR); ?>">EUR</option>
                                    </select>
                                 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                                <div class="form-group row">
                                    <div class="col-12 text-center">
                                        <button class="btn btn-success"><?php echo app('translator')->get('Сохранить'); ?></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        Реквизиты
                    </div>
                    <div class="card-body p-0">
                        <table class="table m-0">
                            <thead>
                            <tr>
                                <th>Система</th>
                                <th>Реквизиты</th>
                                <td></td>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $user->requisites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $requisite): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td>
                                        <?php if($requisite->type == \App\Outcome::QIWI): ?>
                                            QIWI
                                        <?php elseif($requisite->type == \App\Outcome::PAYEER): ?>
                                            PAYEER
                                        <?php elseif($requisite->type == \App\Outcome::PERFECT_MONEY): ?>
                                            Perfect Money
                                        <?php elseif($requisite->type == \App\Outcome::BITCOIN): ?>
                                            Bitcoin
                                        <?php elseif($requisite->type == \App\Outcome::CARD): ?>
                                            Банковская карта
                                        <?php elseif($requisite->type == \App\Outcome::ADVACASH): ?>
                                            Advacash
                                        <?php elseif($requisite->type == \App\Outcome::YANDEX): ?>
                                            Яндекс Деньги
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e($requisite->value); ?></td>
                                    <td class="text-right">
                                        <a href="<?php echo e(route('admin.requisites.delete', $requisite)); ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="8">Запросов нет</td>
                                </tr>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        Запросы на вывод
                    </div>
                    <div class="card-body p-0">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th>Код</th>
                                    <th>Сумма</th>
                                    <th>Валюта</th>
                                    <th>Система</th>
                                    <th>Реквизиты</th>
                                    <th>Дата</th>
                                    <th>Статус</th>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $user->outcomes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $outcome): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($outcome->id); ?></td>
                                    <td>
                                        <?php echo e($outcome->amount / 100); ?>


                                        <?php if($outcome->currency == 'usd'): ?>
                                            <i class="fas fa-dollar-sign"></i>
                                        <?php elseif($outcome->currency == 'eur'): ?>
                                            <i class="fas fa-euro-sign"></i>
                                        <?php else: ?>
                                            <i class="fas fa-ruble-sign"></i>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if($outcome->currency == 'usd'): ?>
                                            <i class="fas fa-dollar-sign"></i>
                                        <?php elseif($outcome->currency == 'eur'): ?>
                                            <i class="fas fa-euro-sign"></i>
                                        <?php else: ?>
                                            <i class="fas fa-ruble-sign"></i>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if($outcome->payment_system == \App\Outcome::QIWI): ?>
                                            QIWI
                                        <?php elseif($outcome->payment_system == \App\Outcome::PAYEER): ?>
                                            PAYEER
                                        <?php elseif($outcome->payment_system == \App\Outcome::PERFECT_MONEY): ?>
                                            Perfect Money
                                        <?php elseif($outcome->payment_system == \App\Outcome::BITCOIN): ?>
                                            Bitcoin
                                        <?php elseif($outcome->payment_system == \App\Outcome::CARD): ?>
                                            Банковская карта
                                        <?php elseif($outcome->payment_system == \App\Outcome::ADVACASH): ?>
                                            Advacash
                                        <?php elseif($outcome->payment_system == \App\Outcome::YANDEX): ?>
                                            Яндекс Деньги
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e($outcome->wallet); ?></td>
                                    <td><?php echo e($outcome->created_at->format('d.m.Y')); ?></td>
                                    <td>
                                        <?php if($outcome->status == \App\Outcome::STATUS_WAITING): ?>
                                            В ожидании
                                        <?php elseif($outcome->status == \App\Outcome::STATUS_SUCCESS): ?>
                                            Обработано
                                        <?php elseif($outcome->status == \App\Outcome::STATUS_ERROR): ?>
                                            Ошибка
                                        <?php elseif($outcome->status == \App\Outcome::STATUS_CANCELED): ?>
                                            Отменено
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-right">
                                        <?php if($outcome->status == \App\Outcome::STATUS_WAITING): ?>
                                            <a href="<?php echo e(route('admin.outcomes.success', $outcome)); ?>" class="btn btn-sm btn-success"><i class="fas fa-check"></i></a>
                                            <a href="<?php echo e(route('admin.outcomes.cancel', $outcome)); ?>" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>
                                            <a href="<?php echo e(route('admin.outcomes.error', $outcome)); ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="8">Запросов нет</td>
                                </tr>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        Запросы на пополнение
                    </div>
                    <div class="card-body p-0">

                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th>Код</th>
                                    <th>Сумма</th>
                                    <th>Валюта</th>
                                    <th>Система</th>
                                    <th>Дата</th>
                                    <th>Статус</th>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $user->incomes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $income): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($income->id); ?></td>
                                    <td class="d-flex align-items-center">
                                        <form action="<?php echo e(route('admin.incomes.update', $income)); ?>" class="mr-2">
                                            <input type="text" name="amount" class="form-control-sm form-control" value="<?php echo e($income->amount / 100); ?>">
                                        </form>

                                        <?php if($income->currency == 'usd'): ?>
                                            <i class="fas fa-dollar-sign"></i>
                                        <?php elseif($income->currency == 'eur'): ?>
                                            <i class="fas fa-euro-sign"></i>
                                        <?php else: ?>
                                            <i class="fas fa-ruble-sign"></i>
                                        <?php endif; ?>

                                        <?php if($income->promocode_id !== null): ?>
                                            +<?php echo e($income->promocode->value); ?>% (<?php echo e((($income->amount / 100) * $income->promocode->value) / 100); ?>)
                                        <?php endif; ?>

                                        <?php if($income->invite_bonus !== 0): ?>
                                            +<?php echo e($income->invite_bonus); ?>% (<?php echo e((($income->amount / 100) * $income->invite_bonus) / 100); ?>)
                                        <?php endif; ?>

                                        <?php if($user->specialPromoIsActive()): ?>
                                            <span class="badge badge-success ml-2">
                                                +<?php echo e($user->special_promo_percent); ?>% (<?php echo e((($income->amount / 100) * $user->special_promo_percent) / 100); ?>)
                                            </span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if($income->currency == 'usd'): ?>
                                            <i class="fas fa-dollar-sign"></i>
                                        <?php elseif($income->currency == 'eur'): ?>
                                            <i class="fas fa-euro-sign"></i>
                                        <?php else: ?>
                                            <i class="fas fa-ruble-sign"></i>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if($income->payment_system == \App\Income::QIWI): ?>
                                            QIWI
                                        <?php elseif($income->payment_system == \App\Income::PAYEER): ?>
                                            PAYEER
                                        <?php elseif($income->payment_system == \App\Income::PERFECT_MONEY): ?>
                                            Perfect Money
                                        <?php elseif($income->payment_system == \App\Income::BITCOIN): ?>
                                            Bitcoin
                                        <?php elseif($income->payment_system == \App\Income::CARD): ?>
                                            Банковская карта
                                        <?php elseif($income->payment_system == \App\Income::ADVACASH): ?>
                                            Advacash
                                        <?php elseif($income->payment_system == \App\Income::YANDEX): ?>
                                            Яндекс Деньги
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e($income->wallet); ?></td>
                                    <td><?php echo e($income->created_at->format('d.m.Y')); ?></td>
                                    <td>
                                        <?php if($income->status == \App\Income::STATUS_WAITING): ?>
                                            В ожидании
                                        <?php elseif($income->status == \App\Income::STATUS_SUCCESS): ?>
                                            Обработано
                                        <?php elseif($income->status == \App\Income::STATUS_ERROR): ?>
                                            Ошибка
                                        <?php elseif($income->status == \App\Income::STATUS_CANCELED): ?>
                                            Отменено
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-right">
                                        <?php if($income->status == \App\Income::STATUS_WAITING): ?>
                                            <a href="<?php echo e(route('admin.incomes.success', $income)); ?>" class="btn btn-sm btn-success"><i class="fas fa-check"></i></a>
                                            <a href="<?php echo e(route('admin.incomes.cancel', $income)); ?>" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>
                                            <a href="<?php echo e(route('admin.incomes.error', $income)); ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="8">Запросов нет</td>
                                </tr>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        Реферальная программа
                    </div>
                    <div class="card-body p-0">

                        <table class="table m-0">
                            <tbody>
                            <tr>
                                <th colspan="3">Первый уровень</th>
                            </tr>
                            <?php $__empty_1 = true; $__currentLoopData = $referals[0]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><a href="<?php echo e(route('admin.users.edit', $item)); ?>"><?php echo e($item->email); ?></a></td>
                                    <td><?php echo e($item->created_at->format('d.m.Y')); ?></td>
                                    <td><?php echo e($item->is_depositet ? 'Активен' : 'Не активен'); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="3">Приглашений нет</td>
                                </tr>
                            <?php endif; ?>
                            <tr>
                                <th colspan="3">Второй уровень</th>
                            </tr>
                            <?php $__empty_1 = true; $__currentLoopData = $referals[1]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><a href="<?php echo e(route('admin.users.edit', $item)); ?>"><?php echo e($item->email); ?></a></td>
                                    <td><?php echo e($item->created_at->format('d.m.Y')); ?></td>
                                    <td><?php echo e($item->is_depositet ? 'Активен' : 'Не активен'); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="3">Приглашений нет</td>
                                </tr>
                            <?php endif; ?>
                            <tr>
                                <th colspan="3">Третий уровень</th>
                            </tr>
                            <?php $__empty_1 = true; $__currentLoopData = $referals[2]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><a href="<?php echo e(route('admin.users.edit', $item)); ?>"><?php echo e($item->email); ?></a></td>
                                    <td><?php echo e($item->created_at->format('d.m.Y')); ?></td>
                                    <td><?php echo e($item->is_depositet ? 'Активен' : 'Не активен'); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="3">Приглашений нет</td>
                                </tr>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/maksa988/www/invest2/resources/views/admin/users/edit.blade.php ENDPATH**/ ?>