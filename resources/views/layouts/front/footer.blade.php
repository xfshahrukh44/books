<footer>
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-9">
                <div class="form-h">
                    <h6>contact us</h6>
                </div>
                <div class="side-form">
                    <form>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Your name </label>
                                    <input type="text" name="name" class="form-control" id="" required="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" id="" required="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" name="subject" class="form-control" id="" required="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" class="form-control" id="" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea name="text" id="textarea" class="form-control" cols="30" rows="8"
                                          required=""></textarea>
                            </div>
                            <button class="btn btn-yellow" type="submit">send message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="footer-links tel-a">
                    <h6>Folow us on</h6>
                    <ul class="d-ul">
                        <li>
                            <a href="{{App\Http\Traits\HelperTrait::returnFlag(1964)}}"><i class="fa-brands fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="{{App\Http\Traits\HelperTrait::returnFlag(1962)}}"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="{{App\Http\Traits\HelperTrait::returnFlag(682)}}"><i class="fa-brands fa-facebook"></i></a>
                        </li>
                    </ul>
                    <a href="mailto:{{App\Http\Traits\HelperTrait::returnFlag(218)}}">{{App\Http\Traits\HelperTrait::returnFlag(218)}}</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<section class="main-bottom-links">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bottom-footer">
                    <div class="term-link">
                        <p>Copyright © 2023, All right reserved</p>
                    </div>
                    <div class="term-link">
                        <a href="#">Terms Of Services</a>
                        <a href="#">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@include('layouts.front.scripts')
@yield('js')


<script src="js/script.js"></script>


</body>

</html>