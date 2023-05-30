<div class="footerContainer">

    <!-- Top footer with all lists and big logo -->
    <div class="top-footer text-white d-flex justify-content-between w-75">

        <!-- List container -->
        <div class="listContainer d-flex flex-wrap">
            <ul>
                <h4 class="text-uppercase m-0">footer list title</h4>

                <ul class="d-flex flex-column p-0">
                    <li class="listItem">
                        <a>
                            footer list item
                        </a>
                    </li>
                </ul>

            </ul>
        </div>

        <!-- Big logo container -->
        <div class="img-box">
        </div>
    </div>
</div>

<!-- Bottom footer with sign-up button and social icons -->
<div class="bottom-footer d-flex justify-content-center">
    <div class="w-75 d-flex justify-content-between">
        <!-- Sign up button -->
        <div>
            <button class="text-uppercase fw-bold btn btn-outline-primary">sign-up now!</button>
        </div>

        <div class="d-flex align-items-center flex-wrap">
            <h4 class="text-uppercase m-0 px-3">follow us</h4>

            <!-- All social icons -->
            <img src="/img/footer-facebook.png" alt="facebook">
            <img src="/img/footer-twitter.png" alt="twitter">
            <img src="/img/footer-youtube.png" alt="youtube">
            <img src="/img/footer-pinterest.png" alt="pinterest">
            <img src="/img/footer-periscope.png" alt="periscope">
        </div>
    </div>
</div>

<style>
    .footerContainer {
        margin: 0 auto;
        padding: 0;
        color: #0282f9;
        background-image: url(../img/footer-bg.jpg);
    }

    .top-footer {
        width: 100%;
    }

    .top-footer img {
        object-fit: cover;
        width: 100%;

    }

    .top-footer .img-box {
        width: 70%;
        background-image: url(../img/dc-logo-bg.png);
        background-repeat: no-repeat;
        background-position: center;
    }

    .listContainer {
        padding: 2rem 0;
        width: 40%;
    }

    .listContainer ul {
        padding: 10px;
        margin: 0;
    }

    .listContainer .listItem {
        color: rgba(211, 211, 211, 0.5);
        cursor: pointer;
    }

    .listItem a:hover {
        color: #0282f9;
    }

    .bottom-footer {
        width: 100%;
        margin: 0 auto;
        padding: 2rem 0;
        background-color: #303030;
        color: #0282f9;


    }

    .bottom-footer img {
        padding: 0 .5rem;
        cursor: pointer;
    }
</style>
