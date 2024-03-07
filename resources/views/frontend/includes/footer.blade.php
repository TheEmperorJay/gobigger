  <!--  Footer Start  -->
  <footer id="footer" class="footer-01">
    <div class="container">
        <div class="footer-subscribe">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h5 class="mb-0">Get Updates and Latest Offers from us.</h5>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="subscribe-box">
                        <div><input type="email" name="email" placeholder="Your email address" required></div>
                        <div class="subscribe-btn"><input type="submit" value="subscribe"></div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="footer-top">
            <div class="row">
                <div class="col-md-4 text-center">
                   <a href="{{url('/')}}">Home</a>
                </div>               
                <div class="col-md-4 text-center">
                   <a href="{{url('about-us')}}">About Us</a>
                </div>               
                <div class="col-md-4 text-center">
                   <a href="{{url('contact-us')}}">Home</a>
                </div>
                <?php $services = App\Models\Service::all();?>
                @foreach ($services as $item) 
                <div class="col-md-4 text-center">
                    <a href="{{url('service/'.$item->slug)}}">{{$item->title}}</a>
                </div>
                @endforeach
               
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="mb-0">© Copyright 2020 GoBigger. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6 text-right">
                        <ul class="footer-social list-inline">
                            <li class="list-inline-item">
                                <a href="javascript:void(0);">
                                    <i class="lni lni-facebook-filled"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript:void(0);">
                                    <i class="lni lni-twitter-original"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript:void(0);">
                                    <i class="lni lni-github-original"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript:void(0);">
                                    <i class="lni lni-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--   Footer End   -->