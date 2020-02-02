@extends('layouts.app')

@section('content')
    <section class="hero is-info is-medium">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="columns is-centered">
                    <div class="column is-8">
                        <h1 class="title">
                            Add your college to {{ env('APP_NAME') }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-8">
                <section class="section">
                    @if ($errors->any())
                        <div class="notification is-danger has-margin-2">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('college.create') }}" method="post">

                        {{ csrf_field() }}

                        <div class="field">
                            <div class="control">
                                <label for="name">College Name</label>
                                <input type="text" class="input" id="name" name="name" required>
                            </div>
                        </div>

                        <div class="columns">
                            <div class="column is-4">
                                <div class="field">
                                    <div class="control">
                                        <label for="state">State</label>
                                        <div class="select is-fullwidth">
                                            <select name="state" id="state">
                                                <option value="" selected disabled>Select State</option>
                                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chandigarh">Chandigarh</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
                                                <option value="National Capital Territory of Delhi">National Capital Territory of Delhi</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Haryana">Haryana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                <option value="Jharkhand">Jharkhand</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Ladakh">Ladakh</option>
                                                <option value="Lakshadweep">Lakshadweep</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Maharashtra">Maharashtra</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya">Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="Odisha">Odisha</option>
                                                <option value="Puducherry">Puducherry</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Sikkim">Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Telangana">Telangana</option>
                                                <option value="Tripura">Tripura</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="Uttarakhand">Uttarakhand</option>
                                                <option value="West Bengal">West Bengal</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="column is-8">
                                <div class="field">
                                    <div class="control">
                                        <label for="city">City/Town Name</label>
                                        <div class="select is-fullwidth">
                                            <select name="city" id="city">
                                                <option value="" disabled selected>Select City</option>
                                                <option value="Mumbai">Mumbai</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Bangalore">Bangalore</option>
                                                <option value="Hyderabad">Hyderabad</option>
                                                <option value="Ahmedabad">Ahmedabad</option>
                                                <option value="Chennai">Chennai</option>
                                                <option value="Kolkata">Kolkata</option>
                                                <option value="Surat">Surat</option>
                                                <option value="Pune">Pune</option>
                                                <option value="Jaipur">Jaipur</option>
                                                <option value="Visakhapatnam">Visakhapatnam</option>
                                                <option value="Kanpur">Kanpur</option>
                                                <option value="Nagpur">Nagpur</option>
                                                <option value="Lucknow">Lucknow</option>
                                                <option value="Thane">Thane</option>
                                                <option value="Bhopal">Bhopal</option>
                                                <option value="Indore">Indore</option>
                                                <option value="Pimpri-Chinchwad">Pimpri-Chinchwad</option>
                                                <option value="Patna">Patna</option>
                                                <option value="Vadodara">Vadodara</option>
                                                <option value="Ghaziabad">Ghaziabad</option>
                                                <option value="Ludhiana">Ludhiana</option>
                                                <option value="Agra">Agra</option>
                                                <option value="Nashik">Nashik</option>
                                                <option value="Faridabad">Faridabad</option>
                                                <option value="Meerut">Meerut</option>
                                                <option value="Rajkot">Rajkot</option>
                                                <option value="Kalyan-Dombivli">Kalyan-Dombivli</option>
                                                <option value="Vasai-Virar">Vasai-Virar</option>
                                                <option value="Varanasi">Varanasi</option>
                                                <option value="Srinagar">Srinagar</option>
                                                <option value="Aurangabad">Aurangabad</option>
                                                <option value="Dhanbad">Dhanbad</option>
                                                <option value="Amritsar">Amritsar</option>
                                                <option value="Navi Mumbai">Navi Mumbai</option>
                                                <option value="Allahabad">Allahabad</option>
                                                <option value="Howrah">Howrah</option>
                                                <option value="Ranchi">Ranchi</option>
                                                <option value="Gwalior">Gwalior</option>
                                                <option value="Jabalpur">Jabalpur</option>
                                                <option value="Coimbatore">Coimbatore</option>
                                                <option value="Vijayawada">Vijayawada</option>
                                                <option value="Jodhpur">Jodhpur</option>
                                                <option value="Madurai">Madurai</option>
                                                <option value="Raipur">Raipur</option>
                                                <option value="Chandigarh">Chandigarh</option>
                                                <option value="Guntur">Guntur</option>
                                                <option value="Guwahati">Guwahati</option>
                                                <option value="Solapur">Solapur</option>
                                                <option value="Hubli–Dharwad">Hubli–Dharwad</option>
                                                <option value="Tiruchirappalli">Tiruchirappalli</option>
                                                <option value="Bareilly">Bareilly</option>
                                                <option value="Moradabad">Moradabad</option>
                                                <option value="Mysore">Mysore</option>
                                                <option value="Tiruppur">Tiruppur</option>
                                                <option value="Gurgaon">Gurgaon</option>
                                                <option value="Aligarh">Aligarh</option>
                                                <option value="Jalandhar">Jalandhar</option>
                                                <option value="Bhubaneswar">Bhubaneswar</option>
                                                <option value="Salem">Salem</option>
                                                <option value="Mira-Bhayandar">Mira-Bhayandar</option>
                                                <option value="Warangal">Warangal</option>
                                                <option value="Jalgaon">Jalgaon</option>
                                                <option value="Kota">Kota</option>
                                                <option value="Bhiwandi">Bhiwandi</option>
                                                <option value="Saharanpur">Saharanpur</option>
                                                <option value="Gorakhpur">Gorakhpur</option>
                                                <option value="Bikaner">Bikaner</option>
                                                <option value="Amravati">Amravati</option>
                                                <option value="Noida">Noida</option>
                                                <option value="Jamshedpur">Jamshedpur</option>
                                                <option value="Bhilai">Bhilai</option>
                                                <option value="Cuttack">Cuttack</option>
                                                <option value="Firozabad">Firozabad</option>
                                                <option value="Kochi">Kochi</option>
                                                <option value="Nellore">Nellore</option>
                                                <option value="Bhavnagar">Bhavnagar</option>
                                                <option value="Dehradun">Dehradun</option>
                                                <option value="Durgapur">Durgapur</option>
                                                <option value="Asansol">Asansol</option>
                                                <option value="Rourkela">Rourkela</option>
                                                <option value="Nanded">Nanded</option>
                                                <option value="Kolhapur">Kolhapur</option>
                                                <option value="Ajmer">Ajmer</option>
                                                <option value="Akola">Akola</option>
                                                <option value="Gulbarga">Gulbarga</option>
                                                <option value="Jamnagar">Jamnagar</option>
                                                <option value="Ujjain">Ujjain</option>
                                                <option value="Loni">Loni</option>
                                                <option value="Siliguri">Siliguri</option>
                                                <option value="Jhansi">Jhansi</option>
                                                <option value="Ulhasnagar">Ulhasnagar</option>
                                                <option value="Jammu">Jammu</option>
                                                <option value="Sangli-Miraj & Kupwad">Sangli-Miraj & Kupwad</option>
                                                <option value="Mangalore">Mangalore</option>
                                                <option value="Erode">Erode</option>
                                                <option value="Belgaum">Belgaum</option>
                                                <option value="Ambattur">Ambattur</option>
                                                <option value="Tirunelveli">Tirunelveli</option>
                                                <option value="Malegaon">Malegaon</option>
                                                <option value="Gaya">Gaya</option>
                                                <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                                                <option value="Udaipur">Udaipur</option>
                                                <option value="Maheshtala">Maheshtala</option>
                                                <option value="Davanagere">Davanagere</option>
                                                <option value="Kozhikode">Kozhikode</option>
                                                <option value="Kurnool">Kurnool</option>
                                                <option value="Rajpur Sonarpur">Rajpur Sonarpur</option>
                                                <option value="Rajahmundry">Rajahmundry</option>
                                                <option value="Bokaro">Bokaro</option>
                                                <option value="South Dumdum">South Dumdum</option>
                                                <option value="Bellary">Bellary</option>
                                                <option value="Patiala">Patiala</option>
                                                <option value="Gopalpur">Gopalpur</option>
                                                <option value="Agartala">Agartala</option>
                                                <option value="Bhagalpur">Bhagalpur</option>
                                                <option value="Muzaffarnagar">Muzaffarnagar</option>
                                                <option value="Bhatpara">Bhatpara</option>
                                                <option value="Panihati">Panihati</option>
                                                <option value="Latur">Latur</option>
                                                <option value="Dhule">Dhule</option>
                                                <option value="Tirupati">Tirupati</option>
                                                <option value="Rohtak">Rohtak</option>
                                                <option value="Korba">Korba</option>
                                                <option value="Bhilwara">Bhilwara</option>
                                                <option value="Berhampur">Berhampur</option>
                                                <option value="Muzaffarpur">Muzaffarpur</option>
                                                <option value="Ahmednagar">Ahmednagar</option>
                                                <option value="Mathura">Mathura</option>
                                                <option value="Kollam">Kollam</option>
                                                <option value="Avadi">Avadi</option>
                                                <option value="Kadapa">Kadapa</option>
                                                <option value="Kamarhati">Kamarhati</option>
                                                <option value="Sambalpur">Sambalpur</option>
                                                <option value="Bilaspur">Bilaspur</option>
                                                <option value="Shahjahanpur">Shahjahanpur</option>
                                                <option value="Satara">Satara</option>
                                                <option value="Bijapur">Bijapur</option>
                                                <option value="Kakinada">Kakinada</option>
                                                <option value="Rampur">Rampur</option>
                                                <option value="Shimoga">Shimoga</option>
                                                <option value="Chandrapur">Chandrapur</option>
                                                <option value="Junagadh">Junagadh</option>
                                                <option value="Thrissur">Thrissur</option>
                                                <option value="Alwar">Alwar</option>
                                                <option value="Bardhaman">Bardhaman</option>
                                                <option value="Kulti">Kulti</option>
                                                <option value="Nizamabad">Nizamabad</option>
                                                <option value="Parbhani">Parbhani</option>
                                                <option value="Tumkur">Tumkur</option>
                                                <option value="Khammam">Khammam</option>
                                                <option value="Ozhukarai">Ozhukarai</option>
                                                <option value="Bihar Sharif">Bihar Sharif</option>
                                                <option value="Panipat">Panipat</option>
                                                <option value="Darbhanga">Darbhanga</option>
                                                <option value="Bally">Bally</option>
                                                <option value="Aizawl">Aizawl</option>
                                                <option value="Dewas">Dewas</option>
                                                <option value="Ichalkaranji">Ichalkaranji</option>
                                                <option value="Karnal">Karnal</option>
                                                <option value="Bathinda">Bathinda</option>
                                                <option value="Jalna">Jalna</option>
                                                <option value="Eluru">Eluru</option>
                                                <option value="Barasat">Barasat</option>
                                                <option value="Kirari Suleman Nagar">Kirari Suleman Nagar</option>
                                                <option value="Purnia">Purnia</option>
                                                <option value="Satna">Satna</option>
                                                <option value="Mau">Mau</option>
                                                <option value="Sonipat">Sonipat</option>
                                                <option value="Farrukhabad">Farrukhabad</option>
                                                <option value="Sagar">Sagar</option>
                                                <option value="Durg">Durg</option>
                                                <option value="Imphal">Imphal</option>
                                                <option value="Ratlam">Ratlam</option>
                                                <option value="Hapur">Hapur</option>
                                                <option value="Arrah">Arrah</option>
                                                <option value="Anantapur">Anantapur</option>
                                                <option value="Karimnagar">Karimnagar</option>
                                                <option value="Etawah">Etawah</option>
                                                <option value="Ambarnath">Ambarnath</option>
                                                <option value="North Dumdum">North Dumdum</option>
                                                <option value="Bharatpur">Bharatpur</option>
                                                <option value="Begusarai">Begusarai</option>
                                                <option value="New Delhi">New Delhi</option>
                                                <option value="Gandhidham">Gandhidham</option>
                                                <option value="Baranagar">Baranagar</option>
                                                <option value="Tiruvottiyur">Tiruvottiyur</option>
                                                <option value="Pondicherry">Pondicherry</option>
                                                <option value="Sikar">Sikar</option>
                                                <option value="Thoothukudi">Thoothukudi</option>
                                                <option value="Rewa">Rewa</option>
                                                <option value="Mirzapur">Mirzapur</option>
                                                <option value="Raichur">Raichur</option>
                                                <option value="Pali">Pali</option>
                                                <option value="Ramagundam">Ramagundam</option>
                                                <option value="Haridwar">Haridwar</option>
                                                <option value="Vijayanagaram">Vijayanagaram</option>
                                                <option value="Tenali">Tenali</option>
                                                <option value="Nagercoil">Nagercoil</option>
                                                <option value="Sri Ganganagar">Sri Ganganagar</option>
                                                <option value="Karawal Nagar">Karawal Nagar</option>
                                                <option value="Mango">Mango</option>
                                                <option value="Thanjavur">Thanjavur</option>
                                                <option value="Bulandshahr">Bulandshahr</option>
                                                <option value="Uluberia">Uluberia</option>
                                                <option value="Katni">Katni</option>
                                                <option value="Sambhal">Sambhal</option>
                                                <option value="Singrauli">Singrauli</option>
                                                <option value="Nadiad">Nadiad</option>
                                                <option value="Secunderabad">Secunderabad</option>
                                                <option value="Naihati">Naihati</option>
                                                <option value="Yamunanagar">Yamunanagar</option>
                                                <option value="Bidhannagar">Bidhannagar</option>
                                                <option value="Pallavaram">Pallavaram</option>
                                                <option value="Bidar">Bidar</option>
                                                <option value="Munger">Munger</option>
                                                <option value="Panchkula">Panchkula</option>
                                                <option value="Burhanpur">Burhanpur</option>
                                                <option value="Raurkela Industrial Township">Raurkela Industrial Township</option>
                                                <option value="Kharagpur">Kharagpur</option>
                                                <option value="Dindigul">Dindigul</option>
                                                <option value="Gandhinagar">Gandhinagar</option>
                                                <option value="Hospet">Hospet</option>
                                                <option value="Nangloi Jat">Nangloi Jat</option>
                                                <option value="Malda">Malda</option>
                                                <option value="Ongole">Ongole</option>
                                                <option value="Deoghar">Deoghar</option>
                                                <option value="Chapra">Chapra</option>
                                                <option value="Haldia">Haldia</option>
                                                <option value="Khandwa">Khandwa</option>
                                                <option value="Nandyal">Nandyal</option>
                                                <option value="Morena">Morena</option>
                                                <option value="Amroha">Amroha</option>
                                                <option value="Anand">Anand</option>
                                                <option value="Bhind">Bhind</option>
                                                <option value="Bhalswa Jahangir Pur">Bhalswa Jahangir Pur</option>
                                                <option value="Madhyamgram">Madhyamgram</option>
                                                <option value="Bhiwani">Bhiwani</option>
                                                <option value="Berhampore">Berhampore</option>
                                                <option value="Ambala">Ambala</option>
                                                <option value="Morbi">Morbi</option>
                                                <option value="Fatehpur">Fatehpur</option>
                                                <option value="Raebareli">Raebareli</option>
                                                <option value="Mahaboobnagar">Mahaboobnagar</option>
                                                <option value="Chittoor">Chittoor</option>
                                                <option value="Bhusawal">Bhusawal</option>
                                                <option value="Orai">Orai</option>
                                                <option value="Bahraich">Bahraich</option>
                                                <option value="Vellore">Vellore</option>
                                                <option value="Mehsana">Mehsana</option>
                                                <option value="Raiganj">Raiganj</option>
                                                <option value="Sirsa">Sirsa</option>
                                                <option value="Danapur">Danapur</option>
                                                <option value="Serampore">Serampore</option>
                                                <option value="Sultan Pur Majra">Sultan Pur Majra</option>
                                                <option value="Guna">Guna</option>
                                                <option value="Jaunpur">Jaunpur</option>
                                                <option value="Panvel">Panvel</option>
                                                <option value="Shivpuri">Shivpuri</option>
                                                <option value="Surendranagar Dudhrej">Surendranagar Dudhrej</option>
                                                <option value="Unnao">Unnao</option>
                                                <option value="Chinsurah">Chinsurah</option>
                                                <option value="Alappuzha">Alappuzha</option>
                                                <option value="Kottayam">Kottayam</option>
                                                <option value="Machilipatnam">Machilipatnam</option>
                                                <option value="Shimla">Shimla</option>
                                                <option value="Adoni">Adoni</option>
                                                <option value="Udupi">Udupi</option>
                                                <option value="Katihar">Katihar</option>
                                                <option value="Proddatur">Proddatur</option>
                                                <option value="Saharsa">Saharsa</option>
                                                <option value="Hindupur">Hindupur</option>
                                                <option value="Sasaram">Sasaram</option>
                                                <option value="Hajipur">Hajipur</option>
                                                <option value="Bhimavaram">Bhimavaram</option>
                                                <option value="Kumbakonam">Kumbakonam</option>
                                                <option value="Dehri">Dehri</option>
                                                <option value="Madanapalle">Madanapalle</option>
                                                <option value="Siwan">Siwan</option>
                                                <option value="Bettiah">Bettiah</option>
                                                <option value="Guntakal">Guntakal</option>
                                                <option value="Srikakulam">Srikakulam</option>
                                                <option value="Motihari">Motihari</option>
                                                <option value="Dharmavaram">Dharmavaram</option>
                                                <option value="Gudivada">Gudivada</option>
                                                <option value="Phagwara">Phagwara</option>
                                                <option value="Narasaraopet">Narasaraopet</option>
                                                <option value="Suryapet">Suryapet</option>
                                                <option value="Miryalaguda">Miryalaguda</option>
                                                <option value="Tadipatri">Tadipatri</option>
                                                <option value="Karaikudi">Karaikudi</option>
                                                <option value="Kishanganj">Kishanganj</option>
                                                <option value="Jamalpur">Jamalpur</option>
                                                <option value="Ballia">Ballia</option>
                                                <option value="Kavali">Kavali</option>
                                                <option value="Tadepalligudem">Tadepalligudem</option>
                                                <option value="Amaravati">Amaravati</option>
                                                <option value="Buxar">Buxar</option>
                                                <option value="Jehanabad">Jehanabad</option>
                                                <option value="Aurangabad">Aurangabad</option>
                                                <option value="Gangtok">Gangtok</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="field has-margin-2">
                            <div class="control">
                                <input type="submit" value="Submit" class="button is-primary is-fullwidth">
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
