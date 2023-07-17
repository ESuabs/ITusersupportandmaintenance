<!DOCTYPE html>
<html lang="en">
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <link rel="icon" href="images/favicon.ico" />
            <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
            <script src="https://kit.fontawesome.com/06bfded604.js" crossorigin="anonymous"></script>
            <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
            <link
                rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
                integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
                crossorigin="anonymous"
                referrerpolicy="no-referrer"
            />
            <script src="//unpkg.com/alpinejs" defer></script>
            <script src="https://cdn.tailwindcss.com"></script>
            <script>
                tailwind.config = {
                    theme: {
                        extend: {
                            colors: {
                                laravel: "#1b5ea1",
                            },
                        },
                    },
                };
            </script>
             {{-- <style>
              .gradient {
                background: linear-gradient(90deg, #1b5ea1 0%, #daae51 100%);
              }
            </style> --}}
    <title>
      AAU Remote Computer Support
    </title>
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    

    <style>
      .containers{
width: 85%;
background: #fff;
border-radius: 6px;
padding: 20px 60px 30px 40px;
box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.containers .content{
display: flex;
align-items: center;
justify-content: space-between;
}
.containers .content .left-side{
width: 25%;
height: 100%;
display: flex;
flex-direction: column;
align-items: center;
justify-content: center;
margin-top: 15px;
position: relative;
}
.content .left-side::before{
content: '';
position: absolute;
height: 70%;
width: 2px;
right: -15px;
top: 50%;
transform: translateY(-50%);
background: #afafb6;
}
.content .left-side .details{
margin: 14px;
text-align: center;
}
.content .left-side .details i{
font-size: 30px;
color:#1b5ea1;
margin-bottom: 10px;
}
.content .left-side .details .topic{
font-size: 18px;
font-weight: 500;
}
.content .left-side .details .text-one,
.content .left-side .details .text-two{
font-size: 14px;
color: #afafb6;
}
.containers .content .right-side{
width: 75%;
margin-left: 75px;
}
.content .right-side .topic-text{
font-size: 23px;
font-weight: 600;
color: #3e2093;
}
.right-side .input-box{
height: 50px;
width: 100%;
margin: 12px 0;
}
.right-side .input-box input,
.right-side .input-box textarea{
height: 100%;
width: 100%;
border: none;
outline: none;
font-size: 16px;
background: #F0F1F8;
border-radius: 6px;
padding: 0 15px;
resize: none;
}
.right-side .message-box{
min-height: 110px;
}
.right-side .input-box textarea{
padding-top: 6px;
}
.right-side .button{
display: inline-block;
margin-top: 12px;
}
.right-side .button input[type="button"]{
color: #fff;
font-size: 18px;
outline: none;
border: none;
padding: 8px 16px;
border-radius: 6px;
background: #1b5ea1;
cursor: pointer;
transition: all 0.3s ease;
}
.button input[type="button"]:hover{
background: #1b5ea1;
}

@media (max-width: 950px) {
.containers{
width: 90%;
padding: 30px 40px 40px 35px ;
}
.containers .content .right-side{
width: 75%;
margin-left: 55px;
}
}
@media (max-width: 820px) {
.containers{
margin: 40px 0;
height: 100%;
}
.containers .content{
flex-direction: column-reverse;
}
.containers .content .left-side{
width: 100%;
flex-direction: row;
margin-top: 40px;
justify-content: center;
flex-wrap: wrap;
}
.containers .content .left-side::before{
display: none;
}
.containers .content .right-side{
width: 100%;
margin-left: 0;
}
}

#hover-img .card:hover img 
{
transform: scale(1.2); 
transition: .3s ease-in-out;
}

    </style>
    {{-- <style>
      .gradient {
        background: linear-gradient(90deg, #5c3abb 0%, #daae51 100%);
      }
    </style> --}}
  </head>

  <body class="mb-48">

            
    <nav class="flex justify-between items-center mb-4">
      <a href="/"
          ><img class="w-40" src="
          {{asset('images/aau logo.png')}}" alt="" class="logo"
      /></a>
      <ul class="flex space-x-6 mr-6 text-lg">
        @if (Route::has('login'))
          @auth
          <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
          
@else
          <li>
              <a href="{{ route('register') }}" class="hover:text-laravel"
                  ><i class="fa-solid fa-user-plus"></i> Register</a
              >
          </li>
          <li>
              <a href="{{ route('login') }}" class="hover:text-laravel"
                  ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                  Login</a
              >
          </li>
          @endauth
          @endif
      </ul>
  </nav>    
          
  <main>
    <div class="pt-24">
      <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
        <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
          <p class="uppercase tracking-loose w-full">Welcome to Remote IT User Support and Maintenance System for AAU.</p>
          <h1 class="my-4 text-5xl font-bold leading-tight">
            Remote IT User Support and Maintenance.
          </h1>
          <p class="leading-normal text-2xl mb-8">
          Get support and guidance for hardware and software maintenance!
          </p>
          {{-- <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
           <a href="https://aau-maintenance-bot.netlify.app/" target="_blank"> AI Bot</a>
          </button> --}}
        </div>
        <!--Right Col-->
        <div class="w-full md:w-3/5 py-6 text-center">
            <img class="w-max" src="
            {{asset('images/maintain2.jpg')}}" alt="" class="logo"
        />
        </div>
      </div>
    </div>
    <div class="relative -mt-12 lg:-mt-24">
      <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g transform="translate(-2.000000, 44.000000)" fill=" #1b5ea1" fill-rule="nonzero">
            <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
            <path
              d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
              opacity="0.100000001"
            ></path>
            <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
          </g>
          <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <path
              d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
            ></path>
          </g>
        </g>
      </svg>
    </div>
    <section class="bg-white border-b py-8">
      <div class="container max-w-5xl mx-auto m-8">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
          AAU Remote Support
        </h2>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto bg-laravel w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="flex flex-wrap">
          <div class="w-5/6 sm:w-1/2 p-6">
            <br>
            <br>
            <h3 class="text-3xl text-gray-800 leading-none mb-3">
              Time Saving   
            </h3>
            <br>
             <h3 class="text-3xl text-gray-800 leading-none mb-3">
                        Quick Updates  
            </h3>
            <br>
             <h3 class="text-3xl text-gray-800 leading-none mb-3">
              Domain-Specific
            </h3>
            
            
            
          </div>
          <div class="w-full sm:w-1/2 p-6">
           <img class="w-50" src="
            {{asset('images/aau.png')}}" alt="" class="logo"
        />
             
             
          </div>
        </div>
        <div class="flex flex-wrap flex-col-reverse sm:flex-row">
          <div class="w-full sm:w-1/2 p-6 mt-6">
           <img class="w-50" src="
            {{asset('images/aau.png')}}" alt="" class="logo"
        />
          </div>
          <div class="w-full sm:w-1/2 p-6 mt-6">
            <div class="align-middle">
              <br>
              <br>
               <h3 class="text-3xl text-gray-800 leading-none mb-3">
 Personalized communication
            </h3>
            <br>
             <h3 class="text-3xl text-gray-800 leading-none mb-3">
         Direct contact with technicians 
            </h3>
            <br>
             <h3 class="text-3xl text-gray-800 leading-none mb-3">
            Dedicated Technical Team
            </h3>
              
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
          <g class="wave" fill="rgb(27, 94, 161, 0.2)">
            <path
              d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"
            ></path>
          </g>
          <g transform="translate(1.000000, 15.000000)" fill="rgb(255, 51, 51,0.8)">
            <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
              <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
              <path
                d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                opacity="0.100000001"
              ></path>
              <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
            </g>
          </g>
        </g>
      </g>
    </svg>
    <section class="bg-white border-b py-8">
      <div class="container mx-auto flex flex-wrap pt-4 pb-12">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
          Services
        </h2>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto bg-laravel w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <section id="hover-img">
          <div class="container py-5">
            <div class="row">
              <div class="col-xs-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="card overflow-hidden">
                  <img src=" {{asset('images/remote3.jpg')}}" class="img-fluid" alt="Loading">
                  <div class="card-body">
                    <h5 class="card-title mt-3">Strategic
                      Remote maintenance guidance.</h5>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item text-muted">
                      Get guidance on repairing some easily maintainable issues you come up on, directly from skilled technicians.
                      <br><br><br>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-xs-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="card overflow-hidden">
                  <img src=" {{asset('images/communicatenew.jpg')}}" class="img-fluid" alt="Loading">
                  <div class="card-body">
                    <h5 class="card-title mt-3">Communicate technicians.</h5>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item text-muted">
                      Directly communicate with technicians on your issue, about the status of the issue, its urgency and other additional information.
          <br><br>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="card overflow-hidden">
                  <img src=" {{asset('images/remote5new.jpg')}}" class="card-img-top" alt="Loading">
                  <div class="card-body">
                    <h5 class="card-title mt-3">
                      AI chat bot.</h5>
        
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item text-muted">
                      </i>  If you cannot get hold of technicians or they are not currently available you can chat with our AI bot which will give you guidance on maintaining some issues, with messages that have been prerecorded.
                      
                    </li>
                   
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
       
        
        
        
      </div>
    </section>
    
 
    <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
          <g class="wave" fill="rgb(27, 94, 161, 0.2)">
            <path
              d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"
            ></path>
          </g>
          <g transform="translate(1.000000, 15.000000)" fill="rgb(255, 51, 51,0.8)">
            <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
              <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
              <path
                d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                opacity="0.100000001"
              ></path>
              <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
            </g>
          </g>
        </g>
      </g>
    </svg>
    <section class="container mx-auto text-center py-6 mb-12">
      <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
        About
      </h2>
      <div class="w-full mb-4">
        <div class="h-1 mx-auto bg-laravel w-64 opacity-25 my-0 py-0 rounded-t"></div>
      </div>
      <p class="my-4 text-2xl leading-tight">
        Remote IT User Support and Maintenance System for AAU is a site that will provide with the technical support and guidance you need in order to get maintenance services for all your devices. It is also equipped with an AI chat bot that will guide you through some basic maintenance process incase technicians are on leave or currently unavailable or if the problem is easily fixable. It is a site that has a dedicated team of technicians ready to assist you on your maintenance issue either remotely or physically. 
      </p>
     
    </section>
    <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-2.000000, 44.000000)" fill=" #1b5ea1" fill-rule="nonzero">
          <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
          <path
            d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
            opacity="0.100000001"
          ></path>
          <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
        </g>
        <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
          <path
            d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
          ></path>
        </g>
      </g>
    </svg>
    <section class="containers mx-auto text-center py-6 mb-12">
      <div class="container">
      <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
        Contact Us
      </h2>
      <div class="w-full mb-4">
        <div class="h-1 mx-auto bg-laravel w-64 opacity-25 my-0 py-0 rounded-t"></div>
      </div>
 
        <div class="content">
          <div class="left-side">
            <div class="address details">
              <i class="fas fa-map-marker-alt"></i>
              <div class="topic">Address</div>
              <div class="text-one">Sidist Kilo Campus(Main Campus) </div>
              <div class="text-two">Addis Ababa</div>
            </div>
            <div class="phone details">
              <i class="fas fa-phone-alt"></i>
              <div class="topic">Phone</div>
              <div class="text-one">+251-111-223862</div>
            
            </div>
            <div class="email details">
              <i class="fas fa-envelope"></i>
              <div class="topic">Email</div>
              <div class="text-one">ict@aau.edu.et</div>
            
            </div>
          </div>
          <div class="right-side">
            
          <form name="contact-form" action="" method="Post">
            @csrf  
            @method('PUT')
            <div class="input-box">
              <input type="text" placeholder="Enter your name" name="username">
              <p class="error username-error"></p>
            </div>
            <div class="input-box">
              <input type="text" placeholder="Enter your email" name="email">
              <p class="error email-error"></p>
            </div>
            <div class="input-box message-box">
              <textarea name="message" id="message" cols="20" rows="20" placeholder="Please Write your suggestions" name="msg"></textarea>
              <p class="error msg-error"></p>
            </div>
            <div class="button">
              <input type="submit" value="Send Now" name="submit" >
            </div>
          </form>
        </div>
        </div>
      </div>
     
    </section>
   <script>
document.forms['contact-form'].onsubmit = function(event){
   
   if(this.username.value.trim() === ""){
      document.querySelector(".username-error").innerHTML = "Please enter a username";
      document.querySelector(".username-error").style.display = "block";
      event.preventDefault();
      return false;
   }
 
   if(this.password.value.trim() === ""){
      document.querySelector(".msg-error").innerHTML = "Please enter your message";
      document.querySelector(".msg-error").style.display = "block";
      event.preventDefault();
      return false;
   }
 
   if(this.email.value.trim() === ""){
      document.querySelector(".email-error").innerHTML = "Please enter a email";
      document.querySelector(".email-error").style.display = "block";
      event.preventDefault();
      return false;
   }
 
}	

   </script>
   <style>
    .fixedButton{
            position: fixed;
            bottom: 0px;
            right: 0px; 
            padding: 20px;
        }
        .roundedFixedBtn{
          height: 60px;
          line-height: 60px;  
          width: 60px; 
          font-size: 2em;
          font-weight: bold;
          border-radius: 50%;
          background-color:#ccffff;
          color: #ff8080;
          text-align: center;
          cursor: pointer;
        }
   </style>
   
                </main>
                <footer
                class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center"
            >

            <a class="fixedButton" href="/guest-ai" >
              <div class="roundedFixedBtn"id="some-button" ><i class="fa-solid fa-robot"></i></div>
           </a>
           <script>
            document.getElementById("some-button").style.display = "none";
        
            function showStuff() {
                document.getElementById("some-button").style.display = "inline-block";
            }
        
        
            setTimeout(showStuff, 3000);
        </script>
                <p class="ml-2">Copyright &copy; 2023, All Rights reserved</p>
                
                
    
                {{-- <a
                    href="/listings/create"
                    class="absolute top-1/3 right-10 bg-black text-white py-2 px-5"
                    >Post Job</a

                > --}}
                
            </footer>
            
       
      
  </body>
</html>