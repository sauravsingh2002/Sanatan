<!DOCTYPE html>
<html lang="en">
<head>
    <title>Web Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script> --}}


    <style>

        .gradient-custom-2 {
            /* fallback for old browsers */
            background: orangered;
            text-align: center;
            margin top: 25px;
        }

        @media (min-width: 300px) {
            .gradient-form {
                height: 100vh !important;
                text-align: center;
            }
        }

        @media (min-width: 300px) {
            .gradient-custom-2 {
                border-top-right-radius: .3rem;
                border-bottom-right-radius: .3rem;

            }

            .input-container {
                position: relative;
                }

                input {
                height: 48px;
                width: 280px;
                border: 1px solid orangered;
                border-radius: 4px;
                box-sizing: border-box;
                padding: 16px;


                }

                .label {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 16px;
                display: flex;
                align-items: center;
                }

                .label {
                pointer-events: none;
                }
                input, .label .text {
                    font-family: 'Segoe UI';
                    font-size: 16px;
                    }

                    input:focus {
                    outline: none;
                    /* border: 2px solid orangered; */

                    }

                    input:focus + .label .text {
                    font-size: 12px;
                    transform: translate(0, -50%);
                    background-color: white;
                    padding-left: 4px;
                    padding-right: 4px;
                    color: orangered;

                    }

                    .label .text {
                    transition: all 0.15s ease-out;

                    }


                    input:focus + .label .text, :not(input[value=""]) + .label .text {
                        font-size: 12px;
                        transform: translate(0, -150%);
                        background-color: white;
                        padding-left: 4px;
                        padding-right: 4px;

                        }

                        input:focus + .label .text {
                        color: orangered;
                        }

                         body{
                            background-image: url('https://media.istockphoto.com/id/508628776/photo/sunset-over-kandariya-mahadeva-temple.webp?b=1&s=170667a&w=0&k=20&c=b8XnVpyy7hDGgHpBOpXTZ581q6Xqan0IUaGKRcgZRRM=');
                            /* opacity: 0.6; */

                        }


@import url(https://fonts.googleapis.com/css?family=Roboto);

html {
  font-family: 'Roboto', sans-serif;
}
.form__group {
  position: relative;
  padding: 15px;
  margin-top: 15px;
  margin-bottom: 11px;

}

.form__field {
  font-family: inherit;
  width: 100%;
  border: 0;
  border-bottom: 1px solid #d2d2d2;
  outline: 0;
  font-size: 16px;
  color: #212121;
  padding: 7px 0;
  background: transparent;
  transition: border-color 0.2s;
}

.form__field::placeholder {
  color: transparent;
}

.form__field:placeholder-shown ~ .form__label {
  font-size: 16px;
  cursor: text;
  top: 20px;
}

 label,
.form__field:focus ~ .form__label {
  position: absolute;
  top: 0;
  display: block;
  transition: 0.2s;
  font-size: 12px;
  color: #9b9b9b;
}

 .form__field:focus ~ .form__label {
  color: orangered;
}

.form__field:focus {
  padding-bottom: 6px;
  border-bottom: 2px solid orangered;
}

.new{
    margin-top: 100px;
    color: whitesmoke
}


.img-flag{
    height: 50px
}

@-webkit-keyframes typing { from { width: 0; } }
@-webkit-keyframes blink-caret { 50% { border-color: transparent; } }

.new1 {
  font: bold 100% Consolas, Monaco, monospace;
  border-right: .1em solid black;
  width: 16.5em;
  width: 21ch;
  margin: 2em 1em;
  white-space: nowrap;
  overflow: hidden;
  -webkit-animation: typing 2s steps(100, end),
             blink-caret .5s step-end infinite alternate;
}

.container {
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.material-textfield {
  position: relative;
}

label {
  position: absolute;
  font-size: 1rem;
  left: 0;
  top: 50%;
  transform: translateY(-50%);
  background-color: white;
  color: gray;
  padding: 0 0.3rem;
  margin: 0 0.5rem;
  transition: .1s ease-out;
  transform-origin: left top;
  pointer-events: none;
}
input {
  font-size: 1rem;
  outline: none;
  border: 1px solid gray;
  border-radius: 5px;
  padding: 1rem 0.7rem;
  color: gray;
  transition: 0.1s ease-out;
}
input:focus {
  border-color: #6200EE;
}
input:focus + label {
  color: #6200EE;
  top: 0;
  transform: translateY(-50%) scale(.9);
}
input:not(:placeholder-shown) + label {
  top: 0;
  transform: translateY(-50%) scale(.9);
}

}
    </style>
</head>




    {{-- @extends('app')
    @section('content') --}}
    {{-- <div class="input-container">

        <input
          type="text" id="fname" name="fname" value="" aria-labelledby="label-fname"
        />
        <label class="label" for="fname" id="label-fname">
          <div class="text">First Name</div>
        </label>

    </div> --}}

    <section class="h-100 gradient-form ">
        <div class="container py-2 h-100 ">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0" style="background-color: white">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4" >

                                        <div class="text-center">
                                        <h3 class="mt-1 mb-5 pb-1">Sign Up</h3>

                                    </div>

                                    <form method="POST" action="/signup">



                                        {{-- <div class="form-outline mb-4 input-container">


                                            <input
                                              type="text" id="fname" name="fname" value="" aria-labelledby="label-fname" class="form-control"
                                            />
                                            <label class="label" for="fname" id="label-fname">
                                              <div class="text">First Name</div>
                                            </label>

                                        </div>

                                        <div class="form-outline mb-4 input-container">


                                            <input
                                              type="text" id="fname" name="fname" value="" aria-labelledby="label-fname" class="form-control"
                                            />
                                            <label class="label" for="fname" id="label-fname">
                                                <div class="text">e-mail</div>
                                            </label>

                                        </div>





                                        <div class="form-outline mb-4 input-container">
                                        <input
                                              type="text" id="password" name="password" value="" aria-labelledby="label-password" class="form-control"
                                            />
                                            <label class="label" for="password" id="label-password">
                                              <div class="text">Password</div>
                                            </label>

                                        </div> --}}
                                        {{-- <div class="form__group">
                                            <input type="username" id="username" class="form__field" placeholder="username" required>
                                            <label for="username" class="form__label">Username</label>
                                          </div>

                                          <div class="form__group">
                                            <input type="email" id="email" class="form__field" placeholder="Your Email" required>
                                            <label for="email" class="form__label">E-mail</label>
                                          </div>

                                          <div class="form__group">
                                            <input type="password" id="message" class="form__field" placeholder="Password" required>
                                            <label for="message" class="form__label">Password</label>
                                          </div>

                                        <br> --}}<div class="container">
                                            <div class="material-textfield">
                                                <input placeholder=" " type="text" required>
                                                <label>Username</label>
                                            </div>
                                        </div><br>
                                            <div class="container">
                                            <div class="material-textfield">
                                                <input placeholder=" " type="text" required>
                                                <label>E-Mail</label>
                                            </div>
                                            </div><br>
                                            <div class="container">
                                            <div class="material-textfield">
                                                <input placeholder=" " type="text" required>
                                                <label>password</label>
                                            </div>
                                            </div>
                                        <div class="text-center pt-1 mb-5 pb-1"><br>
                                            <button
                                                class="btn btn-dark btn-block fa-lg btn-lg gradient-custom-2 mb-3"
                                                type="submit"

                                                data-toggle="modal" id="mediumButton" data-target="#mediumModal"

                                                >Sign Up
                                            </button>
                                            {{-- <a class="text-muted" href="#!">Forgot password?</a> --}}
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Already have'an account</p>
                                            <button type="submit"
                                                class="btn btn-outline-danger">Sign in</button>
                                        </div>
                                    </form>


                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class= "px-3 py-4 p-md-5 mx-md-4">
                                    <img src="{{URL('images/sanatan lok.jpg')}}"alt="..." class="img-center">
                                    <h1 class="mb-4 text-white" >Sanatan Lok</h1>
                                    {{-- <marquee width="100%" direction="left" height="100px">
                                        The religion which eternally exists in God, which is revealed by God, which describes the names, forms, virtues and the abodes of God, and which reveals the true path of God realization for all the souls is called Sanatan Dharm, the universal religion for the whole world.
                                        The word dharm is formed from the root word dhryan (dhyan dharne).It means such actions and such spiritual or religious practices that finally result in all-good for a soul.
                                        </marquee> --}}

                                    <h6 class="text-white" id="new1">The religion which eternally exists in God, which is revealed by God, which describes the names, forms, virtues and the abodes of God, and which reveals the true path of God realization for all the souls is called Sanatan Dharm,the universal religion for the whole world.
                                        The word dharm is formed from the root word dhryan(dhyan dharne).It means such actions and such spiritual or religious practices that finally result in all-good for a soul.</h6>

                                            <h6 class="new"> MADE IN INDIA <img  class = "img-flag" src="{{URL('images/indian-flag.gif')}}"></h6>
                                        {{-- <h6 class="new"> MADE IN INDIA <img  class = "img-flag" src="{{URL('images/indian-flag.gif')}}"></h6> --}}


                                </div>


                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <!-- medium modal -->
      <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body" id="mediumBody">
                  <div>
                      <!-- the result to be displayed apply here -->
                    <h3>
                            Done
                    </h3>

                  </div>
              </div>
          </div>
      </div>
  </div>

</body>

<script>



// on click input box
//  const input = document.getElementById('fname');

//  input.addEventListener('input', () => {
//   input.setAttribute('value', input.value);
//  });

//  const input1 = document.getElementById('password');

//   input.addEventListener('input', () => {
//   input.setAttribute('value', input1.value);
//   });



    // display a modal (medium modal)
    $(document).on('click', '#mediumButton', function(event) {
        event.preventDefault();
        let href = $(this).attr('data-attr');
        $.ajax({
            url: href,
            beforeSend: function() {
                $('#loader').show();
            },
            // return the result
            success: function(result) {
                $('#mediumModal').modal("show");
                $('#mediumBody').html(result).show();
            },
            complete: function() {
                $('#loader').hide();
            },
            error: function(jqXHR, testStatus, error) {
                console.log(error);
                alert("Page " + href + " cannot open. Error:" + error);
                $('#loader').hide();
            },
            timeout: 8000
        })
    });

</script>

</html>
