
    <!DOCTYPE html>
    <html>
    <head>
        <title>Create Contact</title>
        @vite('resources/js/app.js')
        @vite('resources/js/nav.js')
        @vite('resources/js/Admincontact.js')

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    </head>
    <body>
        <div id="mySidenav" class="sidenav">
            <p class="logo"><span>AutoWorld</span></p>
            <a href="/admin/car-list" class="icon-a"><i class="fa-solid fa-bars"></i> &nbsp;&nbsp;Dashboard</a>
		<a id="point" href="/admin/contact"class="icon-a"><i class="fa fa-address-card"></i> &nbsp;&nbsp;ContactCus</a>
		<a  href="/admin/compare"class="icon-a"><i class="fa-solid fa-arrows-turn-to-dots"></i> &nbsp;&nbsp;Compare</a>
		<a href="/admin/upload"class="icon-a"><i class="fa fa-image"></i> &nbsp;&nbsp;Add Logos</a>
        <a  href="/admin/blog"class="icon-a"><i class="fa fa-book-open"></i> &nbsp;&nbsp;Add Blogs</a>
            
        </div>
        <div id="main">
        
            <div class="head">
                <div class="col-div-6">
        <span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; Edit Contact</span>
        <span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >&#9776; Edit Contact</span>
        </div>
            <div class="clearfix"></div>
            <div class="clearfix"></div>
	<br/>
	<div class="clearfix"></div>
        </div>
        <br/>    
        <form action="{{ route('contact.update', $contact->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="form-floating">
                        <label id="text" for="name">Name</label>
                        <br>
                        <input style="width:20%" type="text"  name="name" placeholder="Your Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <label id="text" for="email">Email</label>
                        <br>
                        <input style="width:19.5%; height: 30px; border-radius:6px;" type="email" name="email" placeholder="Your Email">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label id="text" for="subject">Subject</label>
                        <br>
                        <input style="width:20%" type="text"  name="subject"  placeholder="Subject">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label id="text" for="message">Message</label>
                        <br>
                        <textarea  name="message" placeholder="Leave a message here" style="height: 100px"></textarea>
                    </div>
                </div>
                <br>
                <div style="width:20%" class="col-12">
                    <button class="buttonSub" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </body>
    </html>
    