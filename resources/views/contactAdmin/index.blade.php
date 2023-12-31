<!Doctype HTML>
<html>
<head>
    @vite('resources/js/app.js')
    @vite('resources/js/nav.js')
    @vite('resources/js/Admincontact.js')

	<title></title>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<style>
		 .search-add-container {
		display: flex;
		align-items: center;
        }
        .container-input {
        position: relative;
        }

        .input {
        width: 150px;
        padding: 10px 0px 10px 40px;
        border-radius: 9999px;
        border: solid 1px #333;
        transition: all .2s ease-in-out;
        outline: none;
        opacity: 0.8;
        }
        .container-input{
            left:-2px !important;
        }

        .container-input svg {
        position: absolute;
        top: 50%;
        left: 10px;
        transform: translate(0, -50%);
        }

        .input:focus {
        opacity: 1;
        width: 250px;
        }
        #searchInput{
            height: 47px;
        }
		table {
        width: 100%;
        border-collapse: collapse;
        }

        th, td {
        text-align: center;
        padding: 8px;
        border: 1px solid #ccc;
        }	
		.input {
		font-size: 13px;
        width: 192px;
        padding: 10px 0px 10px 40px;
        border-radius: 9999px;
        border: solid 1px #333;
        transition: all .2s ease-in-out;
        outline: none;
        opacity: 0.8;
        }
        .container-input{
            left:20px;
        }

        .container-input svg {
        position: absolute;
        top: 50%;
        left: 10px;
        transform: translate(0, -50%);
        }

        .input:focus {
        opacity: 1;
        width: 300px;
        }
       
        .button-group {
        display: flex;
        flex-direction: column;
        align-items: center;
        }

        .vertical-buttons {
        display: flex;
        flex-direction: column;
        align-items: center;
        }

        .vertical-buttons > * {
        margin: 5px 0;
        }

	</style>
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
<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; ContactCus</span>
<span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >&#9776; ContactCus</span>
</div>
</div>
	<div class="col-div-8">
		<div class="content-box">
			<div style="display:flex; ">
				<div class="container-input">
					<input onkeyup="searchTable()" type="text" placeholder="Search" id="searchInput" name="text" class="input">
					<svg fill="#000000" width="20px" height="20px" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
					<path d="M790.588 1468.235c-373.722 0-677.647-303.924-677.647-677.647 0-373.722 303.925-677.647 677.647-677.647 373.723 0 677.647 303.925 677.647 677.647 0 373.723-303.924 677.647-677.647 677.647Zm596.781-160.715c120.396-138.692 193.807-319.285 193.807-516.932C1581.176 354.748 1226.428 0 790.588 0S0 354.748 0 790.588s354.748 790.588 790.588 790.588c197.647 0 378.24-73.411 516.932-193.807l516.028 516.142 79.963-79.963-516.142-516.028Z" fill-rule="evenodd"></path>
					</svg>
				</div>
			</div>
			<br>
			<div class="scrollable-table">

			<table id="carTable">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Subject</th>
						<th>Message</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($contacts as $contact)
						<tr>
							<td>{{ $contact->name }}</td>
							<td>{{ $contact->email }}</td>
							<td>{{ $contact->subject }}</td>
							<td>{{ $contact->message }}</td>
							<td>
								<div class="button-group">
									<div class="vertical-buttons">
								<form action="{{ route('contact.destroy', $contact->id) }}" method="POST">
									@csrf
									@method('DELETE')
                                    <button type="submit" class="tooltipp" onclick="return confirm('Are you sure?')">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" height="25" width="25">
                                          <path fill="#6361D9" d="M8.78842 5.03866C8.86656 4.96052 8.97254 4.91663 9.08305 4.91663H11.4164C11.5269 4.91663 11.6329 4.96052 11.711 5.03866C11.7892 5.11681 11.833 5.22279 11.833 5.33329V5.74939H8.66638V5.33329C8.66638 5.22279 8.71028 5.11681 8.78842 5.03866ZM7.16638 5.74939V5.33329C7.16638 4.82496 7.36832 4.33745 7.72776 3.978C8.08721 3.61856 8.57472 3.41663 9.08305 3.41663H11.4164C11.9247 3.41663 12.4122 3.61856 12.7717 3.978C13.1311 4.33745 13.333 4.82496 13.333 5.33329V5.74939H15.5C15.9142 5.74939 16.25 6.08518 16.25 6.49939C16.25 6.9136 15.9142 7.24939 15.5 7.24939H15.0105L14.2492 14.7095C14.2382 15.2023 14.0377 15.6726 13.6883 16.0219C13.3289 16.3814 12.8414 16.5833 12.333 16.5833H8.16638C7.65805 16.5833 7.17054 16.3814 6.81109 16.0219C6.46176 15.6726 6.2612 15.2023 6.25019 14.7095L5.48896 7.24939H5C4.58579 7.24939 4.25 6.9136 4.25 6.49939C4.25 6.08518 4.58579 5.74939 5 5.74939H6.16667H7.16638ZM7.91638 7.24996H12.583H13.5026L12.7536 14.5905C12.751 14.6158 12.7497 14.6412 12.7497 14.6666C12.7497 14.7771 12.7058 14.8831 12.6277 14.9613C12.5495 15.0394 12.4436 15.0833 12.333 15.0833H8.16638C8.05588 15.0833 7.94989 15.0394 7.87175 14.9613C7.79361 14.8831 7.74972 14.7771 7.74972 14.6666C7.74972 14.6412 7.74842 14.6158 7.74584 14.5905L6.99681 7.24996H7.91638Z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                        </svg>
                                        <span class="lable2">Delete</span>
          
                                      </button>	
                                    </form>
									</div>
								</div>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			</div>
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	function searchTable() {
	   var input, filter, table, tr, td, i, j, txtValue;
	   input = document.getElementById("searchInput");
	   filter = input.value.toUpperCase();
	   table = document.getElementById("carTable");
	   tr = table.getElementsByTagName("tr");
   
	   for (i = 0; i < tr.length; i++) {
		   td = tr[i].getElementsByTagName("td");
		   for (j = 0; j < td.length; j++) {
			   txtValue = td[j].textContent || td[j].innerText;
			   if (txtValue.toUpperCase().indexOf(filter) > -1) {
				   tr[i].style.display = "";
				   break;
			   } else {
				   tr[i].style.display = "none";
			   }
		   }
	   }
   }
</script>
</body>
</html>
