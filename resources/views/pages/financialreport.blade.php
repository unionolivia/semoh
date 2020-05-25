@extends('layouts.contentLayoutMaster')

@section('title', 'Financial Report')

@section('content')
<section id="form-and-scrolling-components">
    <div class="row match-height">
        <div class="col-md-4 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form Components</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="form-group">
                            <h5>Login Form</h5>
                            <p> Created Simple Login Form.</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#inlineForm">
                                Launch Modal
                            </button>

                            <!-- Modal -->
                            <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel33">Inline Login Form </h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="#">
                                            <div class="modal-body">
                                                <label>Email: </label>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Email Address" class="form-control">
                                                </div>

                                                <label>Password: </label>
                                                <div class="form-group">
                                                    <input type="password" placeholder="Password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Scrolling long Content</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <p>If your content is longer you the page will autmatically adopt a scrollbar</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModalLong">
                            Launch demo modal
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p> Biscuit powder jelly beans. Lollipop candy canes croissant icing chocolate cake. Cake fruitcake
                                            powder pudding pastry.</p>

                                        <p>Tootsie roll oat cake I love bear claw I love caramels caramels halvah chocolate bar. Cotton
                                            candy
                                            gummi bears pudding pie apple pie cookie. Cheesecake jujubes lemon drops danish dessert I love
                                            caramels powder.</p>

                                        <p> Chocolate cake icing tiramisu liquorice toffee donut sweet roll cake. Cupcake dessert icing
                                            dragée
                                            dessert. Liquorice jujubes cake tart pie donut. Cotton candy candy canes lollipop liquorice
                                            chocolate marzipan muffin pie liquorice.
                                        </p>
                                        <p> Powder cookie jelly beans sugar plum ice cream. Candy canes I love powder sugar plum tiramisu.
                                            Liquorice pudding chocolate cake cupcake topping biscuit. Lemon drops apple pie sesame snaps
                                            tootsie
                                            roll carrot cake soufflé halvah.
                                            Biscuit powder jelly beans. Lollipop candy canes croissant icing chocolate cake. Cake fruitcake
                                            powder pudding pastry.</p>

                                        <p>Tootsie roll oat cake I love bear claw I love caramels caramels halvah chocolate bar. Cotton
                                            candy
                                            gummi bears pudding pie apple pie cookie. Cheesecake jujubes lemon drops danish dessert I love
                                            caramels powder.</p>

                                        <p> Chocolate cake icing tiramisu liquorice toffee donut sweet roll cake. Cupcake dessert icing
                                            dragée
                                            dessert. Liquorice jujubes cake tart pie donut. Cotton candy candy canes lollipop liquorice
                                            chocolate marzipan muffin pie liquorice.</p>

                                        <p> Powder cookie jelly beans sugar plum ice cream. Candy canes I love powder sugar plum tiramisu.
                                            Liquorice pudding chocolate cake cupcake topping biscuit. Lemon drops apple pie sesame snaps
                                            tootsie
                                            roll carrot cake soufflé halvah.
                                            Biscuit powder jelly beans. Lollipop candy canes croissant icing chocolate cake. Cake fruitcake
                                            powder pudding pastry.</p>

                                        <p> Tootsie roll oat cake I love bear claw I love caramels caramels halvah chocolate bar. Cotton
                                            candy
                                            gummi bears pudding pie apple pie cookie. Cheesecake jujubes lemon drops danish dessert I love
                                            caramels powder.</p>

                                        <p> Chocolate cake icing tiramisu liquorice toffee donut sweet roll cake. Cupcake dessert icing
                                            dragée
                                            dessert. Liquorice jujubes cake tart pie donut. Cotton candy candy canes lollipop liquorice
                                            chocolate marzipan muffin pie liquorice.</p>

                                        <p> Powder cookie jelly beans sugar plum ice cream. Candy canes I love powder sugar plum tiramisu.
                                            Liquorice pudding chocolate cake cupcake topping biscuit. Lemon drops apple pie sesame snaps
                                            tootsie
                                            roll carrot cake soufflé halvah.
                                            Biscuit powder jelly beans. Lollipop candy canes croissant icing chocolate cake. Cake fruitcake
                                            powder pudding pastry.</p>

                                        <p> Tootsie roll oat cake I love bear claw I love caramels caramels halvah chocolate bar. Cotton
                                            candy
                                            gummi bears pudding pie apple pie cookie. Cheesecake jujubes lemon drops danish dessert I love
                                            caramels powder.</p>

                                        <p> Chocolate cake icing tiramisu liquorice toffee donut sweet roll cake. Cupcake dessert icing
                                            dragée
                                            dessert. Liquorice jujubes cake tart pie donut. Cotton candy candy canes lollipop liquorice
                                            chocolate marzipan muffin pie liquorice.</p>

                                        <p>Powder cookie jelly beans sugar plum ice cream. Candy canes I love powder sugar plum tiramisu.
                                            Liquorice pudding chocolate cake cupcake topping biscuit. Lemon drops apple pie sesame snaps
                                            tootsie
                                            roll carrot cake soufflé halvah.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Accept</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Scrolling long Content Inside Modal</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <p>You can also create a scrollable modal that allows scroll the modal body by adding
                            <code>.modal-dialog-scrollable</code> to <code>.modal-dialog</code>.</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModalScrollable">
                            Launch demo modal
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p> Biscuit powder jelly beans. Lollipop candy canes croissant icing chocolate cake. Cake fruitcake
                                            powder pudding pastry.</p>

                                        <p>Tootsie roll oat cake I love bear claw I love caramels caramels halvah chocolate bar. Cotton
                                            candy
                                            gummi bears pudding pie apple pie cookie. Cheesecake jujubes lemon drops danish dessert I love
                                            caramels powder.</p>

                                        <p> Chocolate cake icing tiramisu liquorice toffee donut sweet roll cake. Cupcake dessert icing
                                            dragée
                                            dessert. Liquorice jujubes cake tart pie donut. Cotton candy candy canes lollipop liquorice
                                            chocolate marzipan muffin pie liquorice.
                                        </p>
                                        <p> Powder cookie jelly beans sugar plum ice cream. Candy canes I love powder sugar plum tiramisu.
                                            Liquorice pudding chocolate cake cupcake topping biscuit. Lemon drops apple pie sesame snaps
                                            tootsie
                                            roll carrot cake soufflé halvah.
                                            Biscuit powder jelly beans. Lollipop candy canes croissant icing chocolate cake. Cake fruitcake
                                            powder pudding pastry.</p>

                                        <p>Tootsie roll oat cake I love bear claw I love caramels caramels halvah chocolate bar. Cotton
                                            candy
                                            gummi bears pudding pie apple pie cookie. Cheesecake jujubes lemon drops danish dessert I love
                                            caramels powder.</p>

                                        <p> Chocolate cake icing tiramisu liquorice toffee donut sweet roll cake. Cupcake dessert icing
                                            dragée
                                            dessert. Liquorice jujubes cake tart pie donut. Cotton candy candy canes lollipop liquorice
                                            chocolate marzipan muffin pie liquorice.</p>

                                        <p> Powder cookie jelly beans sugar plum ice cream. Candy canes I love powder sugar plum tiramisu.
                                            Liquorice pudding chocolate cake cupcake topping biscuit. Lemon drops apple pie sesame snaps
                                            tootsie
                                            roll carrot cake soufflé halvah.
                                            Biscuit powder jelly beans. Lollipop candy canes croissant icing chocolate cake. Cake fruitcake
                                            powder pudding pastry.</p>

                                        <p> Tootsie roll oat cake I love bear claw I love caramels caramels halvah chocolate bar. Cotton
                                            candy
                                            gummi bears pudding pie apple pie cookie. Cheesecake jujubes lemon drops danish dessert I love
                                            caramels powder.</p>

                                        <p> Chocolate cake icing tiramisu liquorice toffee donut sweet roll cake. Cupcake dessert icing
                                            dragée
                                            dessert. Liquorice jujubes cake tart pie donut. Cotton candy candy canes lollipop liquorice
                                            chocolate marzipan muffin pie liquorice.</p>

                                        <p> Powder cookie jelly beans sugar plum ice cream. Candy canes I love powder sugar plum tiramisu.
                                            Liquorice pudding chocolate cake cupcake topping biscuit. Lemon drops apple pie sesame snaps
                                            tootsie
                                            roll carrot cake soufflé halvah.
                                            Biscuit powder jelly beans. Lollipop candy canes croissant icing chocolate cake. Cake fruitcake
                                            powder pudding pastry.</p>

                                        <p> Tootsie roll oat cake I love bear claw I love caramels caramels halvah chocolate bar. Cotton
                                            candy
                                            gummi bears pudding pie apple pie cookie. Cheesecake jujubes lemon drops danish dessert I love
                                            caramels powder.</p>

                                        <p> Chocolate cake icing tiramisu liquorice toffee donut sweet roll cake. Cupcake dessert icing
                                            dragée
                                            dessert. Liquorice jujubes cake tart pie donut. Cotton candy candy canes lollipop liquorice
                                            chocolate marzipan muffin pie liquorice.</p>

                                        <p>Powder cookie jelly beans sugar plum ice cream. Candy canes I love powder sugar plum tiramisu.
                                            Liquorice pudding chocolate cake cupcake topping biscuit. Lemon drops apple pie sesame snaps
                                            tootsie
                                            roll carrot cake soufflé halvah.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Accept</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Form and scrolling Components end -->
<section id="row-grouping">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Row grouping</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <p class="card-text">Although DataTables doesn't have row grouping built-in (picking one of the many methods available would overly limit the DataTables core), it is most certainly possible to give the look and feel of row grouping.</p>
                        <div class="table-responsive">
                            <table class="table row-grouping">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>Jena Gaines</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>30</td>
                                        <td>2008/12/19</td>
                                        <td>$90,560</td>
                                    </tr>
                                    <tr>
                                        <td>Quinn Flynn</td>
                                        <td>Support Lead</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2013/03/03</td>
                                        <td>$342,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>New York</td>
                                        <td>59</td>
                                        <td>2009/04/10</td>
                                        <td>$237,500</td>
                                    </tr>
                                    <tr>
                                        <td>Jenette Caldwell</td>
                                        <td>Development Lead</td>
                                        <td>New York</td>
                                        <td>30</td>
                                        <td>2011/09/03</td>
                                        <td>$345,000</td>
                                    </tr>
                                    <tr>
                                        <td>Doris Wilder</td>
                                        <td>Sales Assistant</td>
                                        <td>Sidney</td>
                                        <td>23</td>
                                        <td>2010/09/20</td>
                                        <td>$85,600</td>
                                    </tr>
                                    <tr>
                                        <td>Jennifer Chang</td>
                                        <td>Regional Director</td>
                                        <td>Singapore</td>
                                        <td>28</td>
                                        <td>2010/11/14</td>
                                        <td>$357,650</td>
                                    </tr>
                                    <tr>
                                        <td>Shou Itou</td>
                                        <td>Regional Marketing</td>
                                        <td>Tokyo</td>
                                        <td>20</td>
                                        <td>2011/08/14</td>
                                        <td>$163,000</td>
                                    </tr>
                                    <tr>
                                        <td>Michelle House</td>
                                        <td>Integration Specialist</td>
                                        <td>Sidney</td>
                                        <td>37</td>
                                        <td>2011/06/02</td>
                                        <td>$95,400</td>
                                    </tr>
                                    <tr>
                                        <td>Prescott Bartlett</td>
                                        <td>Technical Author</td>
                                        <td>London</td>
                                        <td>27</td>
                                        <td>2011/05/07</td>
                                        <td>$145,000</td>
                                    </tr>
                                    <tr>
                                        <td>Martena Mccray</td>
                                        <td>Post-Sales support</td>
                                        <td>Edinburgh</td>
                                        <td>46</td>
                                        <td>2011/03/09</td>
                                        <td>$324,050</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection



@push('scripts')

<link rel="stylesheet" type="text/css" href="{{ asset ('vendors/css/tables/datatable/datatables.min.css') }}">

<script src="{{asset ('js/scripts/datatables/datatable.js')}}"></script>
 <!-- BEGIN: Page Vendor JS-->
 <script src="{{ asset ('vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
 <script src="{{ asset ('vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
 <script src="{{ asset ('vendors/js/tables/datatable/datatables.min.js')}}"></script>
 <script src="{{ asset ('vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
 <script src="{{ asset ('vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
 <script src="{{ asset ('vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
 <script src="{{ asset ('vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
 <script src="{{ asset ('vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
 <!-- END: Page Vendor JS-->
    
@endpush