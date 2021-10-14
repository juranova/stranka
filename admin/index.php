<?php
	include 'hlavickaAdmin.php';
	include 'navbarAdmin.php';
	include 'pataAdmin.php';


?>


<div class="cotainer bg-dark pb-5 border-top border-white" >
        <div class="row justify-content-center ">
            <div class="col-md-4 mt-5 ">
                <div class="card bg-dark border border-warning ">
                    <div class="card-header text-center text-white bg-warning text-dark"  ><b>Prihlásenie</b></div>
                    <div class="card-body">
                        <form action="" method="">
                            <div class="form-group row was-validated">
                                <small id="emailHelp" class="form-text text-dark mb-2" ><b>Užívateľské meno</b></small>
                                <div class="col-lg-12 input-container">

                                    <input type="text" id="email_address" class="form-control" name="email-address" required >


                                    <div class="invalid-feedback">
                                      Zadajte svoje užívateľské meno
                                    </div>
                                </div>

                            </div>

                            <div class="form-group row was-validated">
                                 <small id="emailHelp" class="form-text text-dark mb-2"><b>Heslo</b></small>
                                <div class="col-lg-12">
                                    <input type="password" id="password" class="form-control" name="password" required>
                                    <div class="invalid-feedback">
                                      Zadajte svoje heslo
                                    </div>
                                </div>

                            </div>

                            <div class="form-group row">
                                <div class="col-md-6  ">
                                    <div class="checkbox text-white">
                                        <label>
                                            <input type="checkbox" name="remember"> Pamätať prihlásenie
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center ">
                                <button type="submit" class="btn btn-dark text-warning">
                                    Prihlásiť sa
                                </button>
                                <br>
                                <a href="#" class="page-link border-0 bg-dark text-warning">
                                    Zaregistruj sa
                                </a>
                                <a href="#" class="page-link border-0 bg-dark text-warning">
                                    Zabudol som heslo
                                </a>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>