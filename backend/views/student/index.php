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
                <p class="text-muted font-13 m-b-30">

                </p>
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
                                        aria-label="First name: activate to sort column descending">First name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1"
                                        colspan="1" style="width: 74px;"
                                        aria-label="Last name: activate to sort column ascending">Last name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1"
                                        colspan="1" style="width: 162px;"
                                        aria-label="Position: activate to sort column ascending">Position
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1"
                                        colspan="1" style="width: 71px;"
                                        aria-label="Office: activate to sort column ascending">Office
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1"
                                        colspan="1" style="width: 30px;"
                                        aria-label="Age: activate to sort column ascending">Age
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1"
                                        colspan="1" style="width: 69px;"
                                        aria-label="Start date: activate to sort column ascending">Start date
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1"
                                        colspan="1" style="width: 52px;"
                                        aria-label="Salary: activate to sort column ascending">Salary
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1"
                                        colspan="1" style="width: 39px;"
                                        aria-label="Extn.: activate to sort column ascending">Extn.
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1"
                                        colspan="1" style="width: 0px; display: none;"
                                        aria-label="E-mail: activate to sort column ascending">E-mail
                                    </th>
                                </tr>
                                </thead>
                                <tbody>


                                <tr role="row" class="odd">
                                    <td tabindex="0" class="sorting_1">Airi</td>
                                    <td>Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                    <td>$162,700</td>
                                    <td>5407</td>
                                    <td style="display: none;">a.satou@datatables.net</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1" tabindex="0">Angelica</td>
                                    <td>Ramos</td>
                                    <td>Chief Executive Officer (CEO)</td>
                                    <td>London</td>
                                    <td>47</td>
                                    <td>2009/10/09</td>
                                    <td>$1,200,000</td>
                                    <td>5797</td>
                                    <td style="display: none;">a.ramos@datatables.net</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td tabindex="0" class="sorting_1">Ashton</td>
                                    <td>Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009/01/12</td>
                                    <td>$86,000</td>
                                    <td>1562</td>
                                    <td style="display: none;">a.cox@datatables.net</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1" tabindex="0">Bradley</td>
                                    <td>Greer</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>41</td>
                                    <td>2012/10/13</td>
                                    <td>$132,000</td>
                                    <td>2558</td>
                                    <td style="display: none;">b.greer@datatables.net</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1" tabindex="0">Brenden</td>
                                    <td>Wagner</td>
                                    <td>Software Engineer</td>
                                    <td>San Francisco</td>
                                    <td>28</td>
                                    <td>2011/06/07</td>
                                    <td>$206,850</td>
                                    <td>1314</td>
                                    <td style="display: none;">b.wagner@datatables.net</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td tabindex="0" class="sorting_1">Brielle</td>
                                    <td>Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2012/12/02</td>
                                    <td>$372,000</td>
                                    <td>4804</td>
                                    <td style="display: none;">b.williamson@datatables.net</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1" tabindex="0">Bruno</td>
                                    <td>Nash</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>38</td>
                                    <td>2011/05/03</td>
                                    <td>$163,500</td>
                                    <td>6222</td>
                                    <td style="display: none;">b.nash@datatables.net</td>
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