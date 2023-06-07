<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"  ></script>

<style>

.gradient-custom-2 {
/* fallback for old browsers */
background: #fccb90;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
}

@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}
    </style>
</head>
<body>

    <section class="h-100 gradient-form " style="background-color: #eeeeee05;">
        <div class="container py-5 h-100 ">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">

                      <div class="text-center">
                          {{-- <img src="https://play-lh.googleusercontent.com/DTzWtkxfnKwFO3ruybY1SKjJQnLYeuK3KmQmwV5OQ3dULr5iXxeEtzBLceultrKTIUTr" width: 185px; alt="logo" height="50px"> --}}
                        <h4 class="mt-1 mb-5 pb-1">We are The Team</h4>
                      </div>

                      <form>
                        {{-- <p>Please login to your account</p> --}}

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example11">Username</label>
                            <input type="email" id="form2Example11" class="form-control"
                            placeholder="Phone number or email address" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example22">Password</label>
                            <input type="password" id="form2Example22" class="form-control" />
                        </div>

                        <div class="text-center pt-1 mb-5 pb-1">
                          <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Login</button>
                          <a href="{{url('forgotpassword')}}" class="text-muted">Forgot password?</a>
                        </div>

                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <p class="mb-0 me-2">Don't have an account?</p>

                          <button
                          onclick="window.location='{{ url('rigester')}}'"

                          type="button" class="btn btn-outline-danger"
                            >Create new</button>

                        </div>

                      </form>

                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h4 class="mb-4">Sanantan Lok</h4>
                      <p class="small mb-0">The religion which eternally exists in God, which is revealed by God, which describes the names, forms, virtues and the abodes of God, and which reveals the true path of God realization for all the souls is called Sanatan Dharm, the universal religion for the whole world.
                        The word dharm is formed from the root word dhryan (dhryan dharne); it means such actions and such spiritual or religious practices that finally result in all-good for a soul. A general description of dharm is:
                        </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


</body>
</html>
