<?php
/**
 * @var $this \yii\web\View
 */
?>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Список студентов
                    <small>Студенты</small>
                </h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div id="datatable-responsive_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="datatable-responsive"
                                   class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline collapsed"
                                   cellspacing="0" width="100%" role="grid" aria-describedby="datatable-responsive_info"
                                   style="width: 100%;">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable-responsive"
                                        rowspan="1" colspan="1" style="width: 75px;" aria-sort="ascending"
                                        aria-label="Ф.И.О.: activate to sort column descending">Ф.И.О.
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1"
                                        colspan="1" style="width: 74px;"
                                        aria-label="Last name: activate to sort column ascending">Программа
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1"
                                        colspan="1" style="width: 162px;"
                                        aria-label="Position: activate to sort column ascending">Номер договора
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1"
                                        colspan="1" style="width: 71px;"
                                        aria-label="Office: activate to sort column ascending">Дата заключения
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1"
                                        colspan="1" style="width: 30px;"
                                        aria-label="Age: activate to sort column ascending">Полная сумма по договору
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1"
                                        colspan="1" style="width: 69px;"
                                        aria-label="Start date: activate to sort column ascending">Оплаченная сумма
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1"
                                        colspan="1" style="width: 0px; display: none;"
                                        aria-label="E-mail: activate to sort column ascending">Остаток
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1"
                                        colspan="1" style="width: 69px;"
                                        aria-label="">Действия
                                    </th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr role="row" class="odd">
                                    <td tabindex="0">Иванов Иван Иванович</td>
                                    <td>Work and Travel USA</td>
                                    <td>11111111</td>
                                    <td>2008/11/28</td>
                                    <td>3232323</td>
                                    <td>12123123</td>
                                    <td>3023</td>
                                    <td>
                                        <i class="fa fa-money" aria-hidden="true" title="Оплата"></i>
                                    </td>
                                </tr>
                                <tr role="row" class="even">
                                    <td tabindex="0">Иванов Иван Иванович</td>
                                    <td>Work 2213213and Travel USA</td>
                                    <td>111111111</td>
                                    <td>2008/11/28</td>
                                    <td>120000</td>
                                    <td>120000</td>
                                    <td>3023</td>
                                    <td>
                                        <i class="fa fa-money" aria-hidden="true" title="Оплата"></i>
                                        <i class="fa fa-times" aria-hidden="true" title="Отказ от программы"></i>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>