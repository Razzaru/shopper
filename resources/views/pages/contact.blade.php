@extends('layouts.main')

@section('main')
    <section class="google_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2361.2072993309366!2d91.41945601625444!3d53.71456938005781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5d2c3d439b7a2499%3A0x2881e3f6dfe09a4d!2z0JTQvtC8INCa0L7Qu9C-0YLRg9GI0LrQuNC90LA!5e0!3m2!1sru!2sru!4v1480694289506" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
    <section class="header_text sub">
        <img class="pageBanner" src="/img/app/pageBanner.png" alt="New products">
        <br>
        <h3><span>Contact Us</span></h3>
    </section>
    <section class="main-content">
        <div class="row">
            <div class="span5">
                <div>
                    <h5>ADDITIONAL INFORMATION</h5>
                    <p><strong>Phone:</strong>&nbsp;(123) 456-7890<br>
                        <strong>Fax:</strong>&nbsp;+04 (123) 456-7890<br>
                        <strong>Email:</strong>&nbsp;<a href="#">vietcuong_it@yahoo.com</a>
                    </p>
                    <br/>
                    <h5>SECONDARY OFFICE IN VIETNAM</h5>
                    <p><strong>Phone:</strong>&nbsp;(113) 023-1125<br>
                        <strong>Fax:</strong>&nbsp;+04 (113) 023-1145<br>
                        <strong>Email:</strong>&nbsp;<a href="#">vietcuong_it@yahoo.com</a>
                    </p>
                </div>
            </div>
            <div class="span7">
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                    dicta sunt explicabo.</p>
                <form method="post" action="#">
                    <fieldset>
                        <div class="clearfix">
                            <label for="name"><span>Name:</span></label>
                            <div class="input">
                                <input tabindex="1" size="18" id="name" name="name" type="text" value=""
                                       class="input-xlarge" placeholder="Name">
                            </div>
                        </div>

                        <div class="clearfix">
                            <label for="email"><span>Email:</span></label>
                            <div class="input">
                                <input tabindex="2" size="25" id="email" name="email" type="text" value=""
                                       class="input-xlarge" placeholder="Email Address">
                            </div>
                        </div>

                        <div class="clearfix">
                            <label for="message"><span>Message:</span></label>
                            <div class="input">
                                <textarea tabindex="3" class="input-xlarge" id="message" name="body" rows="7"
                                          placeholder="Message"></textarea>
                            </div>
                        </div>

                        <div class="actions">
                            <button tabindex="3" type="submit" class="btn btn-inverse">Send message</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </section>
@stop
