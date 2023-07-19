@extends('dasbor.layout.app')
@section('content')

    <section class="py-5">
        <div class="container">
            <div class="row">
                @include('dasbor.partials.left-sidebar')
                <!-- .col end -->

                <div class="col-md-10">
                    <div class="row mb-3">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h3>Dasbor</h3>
                                    <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error soluta illum asperiores at modi eos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .row end -->
                    <div class="row mb-3">
                        <div class="col">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="fs-1 fw-bold">
                                        12
                                    </div>
                                    <div class="text-muted">Jumlah Distrik</div>
                                </div>
                            </div>
                        </div>
                        <!-- .col end -->
                        <div class="col">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="fs-1 fw-bold">
                                        40
                                    </div>
                                    <div class="text-muted">Jumlah Kelurahan</div>
                                </div>
                            </div>
                        </div>
                        <!-- .col end -->
                        <div class="col">
                            <div class="card">                                
                                <div class="card-body text-center">
                                    <div class="fs-1 fw-bold">
                                        200
                                    </div>
                                    <div class="text-muted">Jumlah RW</div>
                                </div>
                            </div>
                        </div>
                        <!-- .col end -->
                    </div>
                    <!-- .row end -->

                    <div class="row mb-3">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63775.81196932101!2d140.64884786812405!3d-2.5107258978306266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x686c57ef54039863%3A0x13fe60c6bfbe82b0!2sJayapura%20Utara%2C%20Jayapura%20City%2C%20Papua!5e0!3m2!1sen!2sid!4v1689160181134!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .row end -->

                </div>
                <!-- .col end -->
            </div>
            <!-- .row end -->
        </div>
    </section>

  @stop
