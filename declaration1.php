<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("includes/main.php");

?>
<!-- body -->

<body class="main-layout inner_page">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
   </div>
   <!-- end loader -->
   <!-- top -->

   <!-- end header -->
   <!-- end banner -->
   <!-- coronata -->
   <div class="coronata">
      <form action="add_" method="GET">
         <div class="container1">

            <div class="title">
               <h1>Vietnam Health Declaration</h1>
            </div>
            <!-- <div class="btn-update"> 
               <a href="" title="Update declaration">
                  <span class="span-update">Update declaration</span>
               </a>
         </div>  -->
            <div>
               <div>
                  <div>
                     <div class="title">
                        <b>GENERAL HEALTH DECLARATION INFORMATION</b>
                     </div>
                     <div></div>
                  </div>
                  <div class="title">
                     <div>( COVID-19 EPIDEMIC PREVENTION )</div>
                     <div style="color: red;text-transform: none;">Warning: Declaring false information is a violation of Vietnamese law and may be subject to criminal handling</div>
                  </div>
               </div>
            </div>
            <!-- <form action="add_" method="GET"> -->
            <div class="row-form">
               <div class="form-group coll-1">
                  <label>Full name (CAPITAL LETTERS)<em style="line-height: 1">(*)</em></label>
                  <input class="form-controlbtn" type="text" name="fields[fullName]" style="text-transform: uppercase;" data-msg-required="Full name field is required" />
               </div>
               <div class="form-group coll-1">
                  <label>Passport number / ID card</label>
                  <input class="form-controlbtn" type="text" name="fields[passport]" data-msg-required="Passport number or other legal document field is required" />
               </div>
            </div>
            <div class="row-form">
               <div class="form-group coll-1">
                  <label>Year of Birth <em style="line-height: 1">(*)</em></label>
                  <input type="hidden" id="input91987" value="2002" class="vhv-form-number" name="fields[birthYear]">
                  <input class="form-controlbtn" type="text" size="16" />
               </div>
               <div class="form-group coll-1">
                  <label>Gender <em style="line-height: 1">(*)</em></label>
                  <div class="form-group">
                     <table class="radio-table">
                        <tr>
                           <td>
                              <label>
                                 <input type="radio" value="Male" checked="checked" name="fields[gender]">&nbsp;Male
                              </label>
                           </td>
                           <td>&nbsp;</td>
                           <td>
                              <label>
                                 <input type="radio" value="Female" name="fields[gender]">&nbsp;Female
                              </label>
                           </td>
                           <td>&nbsp;</td>
                           <td>
                              <label>
                                 <input type="radio" value="Other" name="fields[gender]">&nbsp;Other
                              </label>
                           </td>
                           <td>&nbsp;</td>
                        </tr>
                     </table>
                  </div>
               </div>
               <div class="form-group coll-1">
                  <label>Nationality <em style="line-height: 1">(*)</em></label>
                  <select class="form-controlbtn" name="nationality">
                     <option value="">-- select one --</option>
                     <option value="afghan">Afghan</option>
                     <option value="albanian">Albanian</option>
                     <option value="algerian">Algerian</option>
                     <option value="american">American</option>
                     <option value="andorran">Andorran</option>
                     <option value="angolan">Angolan</option>
                     <option value="antiguans">Antiguans</option>
                     <option value="argentinean">Argentinean</option>
                     <option value="armenian">Armenian</option>
                     <option value="australian">Australian</option>
                     <option value="austrian">Austrian</option>
                     <option value="azerbaijani">Azerbaijani</option>
                     <option value="bahamian">Bahamian</option>
                     <option value="bahraini">Bahraini</option>
                     <option value="bangladeshi">Bangladeshi</option>
                     <option value="barbadian">Barbadian</option>
                     <option value="barbudans">Barbudans</option>
                     <option value="batswana">Batswana</option>
                     <option value="belarusian">Belarusian</option>
                     <option value="belgian">Belgian</option>
                     <option value="belizean">Belizean</option>
                     <option value="beninese">Beninese</option>
                     <option value="bhutanese">Bhutanese</option>
                     <option value="bolivian">Bolivian</option>
                     <option value="bosnian">Bosnian</option>
                     <option value="brazilian">Brazilian</option>
                     <option value="british">British</option>
                     <option value="bruneian">Bruneian</option>
                     <option value="bulgarian">Bulgarian</option>
                     <option value="burkinabe">Burkinabe</option>
                     <option value="burmese">Burmese</option>
                     <option value="burundian">Burundian</option>
                     <option value="cambodian">Cambodian</option>
                     <option value="cameroonian">Cameroonian</option>
                     <option value="canadian">Canadian</option>
                     <option value="cape verdean">Cape Verdean</option>
                     <option value="central african">Central African</option>
                     <option value="chadian">Chadian</option>
                     <option value="chilean">Chilean</option>
                     <option value="chinese">Chinese</option>
                     <option value="colombian">Colombian</option>
                     <option value="comoran">Comoran</option>
                     <option value="congolese">Congolese</option>
                     <option value="costa rican">Costa Rican</option>
                     <option value="croatian">Croatian</option>
                     <option value="cuban">Cuban</option>
                     <option value="cypriot">Cypriot</option>
                     <option value="czech">Czech</option>
                     <option value="danish">Danish</option>
                     <option value="djibouti">Djibouti</option>
                     <option value="dominican">Dominican</option>
                     <option value="dutch">Dutch</option>
                     <option value="east timorese">East Timorese</option>
                     <option value="ecuadorean">Ecuadorean</option>
                     <option value="egyptian">Egyptian</option>
                     <option value="emirian">Emirian</option>
                     <option value="equatorial guinean">Equatorial Guinean</option>
                     <option value="eritrean">Eritrean</option>
                     <option value="estonian">Estonian</option>
                     <option value="ethiopian">Ethiopian</option>
                     <option value="fijian">Fijian</option>
                     <option value="filipino">Filipino</option>
                     <option value="finnish">Finnish</option>
                     <option value="french">French</option>
                     <option value="gabonese">Gabonese</option>
                     <option value="gambian">Gambian</option>
                     <option value="georgian">Georgian</option>
                     <option value="german">German</option>
                     <option value="ghanaian">Ghanaian</option>
                     <option value="greek">Greek</option>
                     <option value="grenadian">Grenadian</option>
                     <option value="guatemalan">Guatemalan</option>
                     <option value="guinea-bissauan">Guinea-Bissauan</option>
                     <option value="guinean">Guinean</option>
                     <option value="guyanese">Guyanese</option>
                     <option value="haitian">Haitian</option>
                     <option value="herzegovinian">Herzegovinian</option>
                     <option value="honduran">Honduran</option>
                     <option value="hungarian">Hungarian</option>
                     <option value="icelander">Icelander</option>
                     <option value="indian">Indian</option>
                     <option value="indonesian">Indonesian</option>
                     <option value="iranian">Iranian</option>
                     <option value="iraqi">Iraqi</option>
                     <option value="irish">Irish</option>
                     <option value="israeli">Israeli</option>
                     <option value="italian">Italian</option>
                     <option value="ivorian">Ivorian</option>
                     <option value="jamaican">Jamaican</option>
                     <option value="japanese">Japanese</option>
                     <option value="jordanian">Jordanian</option>
                     <option value="kazakhstani">Kazakhstani</option>
                     <option value="kenyan">Kenyan</option>
                     <option value="kittian and nevisian">Kittian and Nevisian</option>
                     <option value="kuwaiti">Kuwaiti</option>
                     <option value="kyrgyz">Kyrgyz</option>
                     <option value="laotian">Laotian</option>
                     <option value="latvian">Latvian</option>
                     <option value="lebanese">Lebanese</option>
                     <option value="liberian">Liberian</option>
                     <option value="libyan">Libyan</option>
                     <option value="liechtensteiner">Liechtensteiner</option>
                     <option value="lithuanian">Lithuanian</option>
                     <option value="luxembourger">Luxembourger</option>
                     <option value="macedonian">Macedonian</option>
                     <option value="malagasy">Malagasy</option>
                     <option value="malawian">Malawian</option>
                     <option value="malaysian">Malaysian</option>
                     <option value="maldivan">Maldivan</option>
                     <option value="malian">Malian</option>
                     <option value="maltese">Maltese</option>
                     <option value="marshallese">Marshallese</option>
                     <option value="mauritanian">Mauritanian</option>
                     <option value="mauritian">Mauritian</option>
                     <option value="mexican">Mexican</option>
                     <option value="micronesian">Micronesian</option>
                     <option value="moldovan">Moldovan</option>
                     <option value="monacan">Monacan</option>
                     <option value="mongolian">Mongolian</option>
                     <option value="moroccan">Moroccan</option>
                     <option value="mosotho">Mosotho</option>
                     <option value="motswana">Motswana</option>
                     <option value="mozambican">Mozambican</option>
                     <option value="namibian">Namibian</option>
                     <option value="nauruan">Nauruan</option>
                     <option value="nepalese">Nepalese</option>
                     <option value="new zealander">New Zealander</option>
                     <option value="ni-vanuatu">Ni-Vanuatu</option>
                     <option value="nicaraguan">Nicaraguan</option>
                     <option value="nigerien">Nigerien</option>
                     <option value="north korean">North Korean</option>
                     <option value="northern irish">Northern Irish</option>
                     <option value="norwegian">Norwegian</option>
                     <option value="omani">Omani</option>
                     <option value="pakistani">Pakistani</option>
                     <option value="palauan">Palauan</option>
                     <option value="panamanian">Panamanian</option>
                     <option value="papua new guinean">Papua New Guinean</option>
                     <option value="paraguayan">Paraguayan</option>
                     <option value="peruvian">Peruvian</option>
                     <option value="polish">Polish</option>
                     <option value="portuguese">Portuguese</option>
                     <option value="qatari">Qatari</option>
                     <option value="romanian">Romanian</option>
                     <option value="russian">Russian</option>
                     <option value="rwandan">Rwandan</option>
                     <option value="saint lucian">Saint Lucian</option>
                     <option value="salvadoran">Salvadoran</option>
                     <option value="samoan">Samoan</option>
                     <option value="san marinese">San Marinese</option>
                     <option value="sao tomean">Sao Tomean</option>
                     <option value="saudi">Saudi</option>
                     <option value="scottish">Scottish</option>
                     <option value="senegalese">Senegalese</option>
                     <option value="serbian">Serbian</option>
                     <option value="seychellois">Seychellois</option>
                     <option value="sierra leonean">Sierra Leonean</option>
                     <option value="singaporean">Singaporean</option>
                     <option value="slovakian">Slovakian</option>
                     <option value="slovenian">Slovenian</option>
                     <option value="solomon islander">Solomon Islander</option>
                     <option value="somali">Somali</option>
                     <option value="south african">South African</option>
                     <option value="south korean">South Korean</option>
                     <option value="spanish">Spanish</option>
                     <option value="sri lankan">Sri Lankan</option>
                     <option value="sudanese">Sudanese</option>
                     <option value="surinamer">Surinamer</option>
                     <option value="swazi">Swazi</option>
                     <option value="swedish">Swedish</option>
                     <option value="swiss">Swiss</option>
                     <option value="syrian">Syrian</option>
                     <option value="taiwanese">Taiwanese</option>
                     <option value="tajik">Tajik</option>
                     <option value="tanzanian">Tanzanian</option>
                     <option value="thai">Thai</option>
                     <option value="togolese">Togolese</option>
                     <option value="tongan">Tongan</option>
                     <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                     <option value="tunisian">Tunisian</option>
                     <option value="turkish">Turkish</option>
                     <option value="tuvaluan">Tuvaluan</option>
                     <option value="ugandan">Ugandan</option>
                     <option value="ukrainian">Ukrainian</option>
                     <option value="uruguayan">Uruguayan</option>
                     <option value="uzbekistani">Uzbekistani</option>
                     <option value="venezuelan">Venezuelan</option>
                     <option value="vietnamese">Vietnamese</option>
                     <option value="welsh">Welsh</option>
                     <option value="yemenite">Yemenite</option>
                     <option value="zambian">Zambian</option>
                     <option value="zimbabwean">Zimbabwean</option>
                  </select>
               </div>
            </div>
            <div class="form-group coll-1"><b>Contact address in Vietnam</b></div>
            <div class="row-form">
               <div class="form-group coll-1">
                  <label>Province <em style="line-height: 1">(*)</em></label>
                  <select class="form-controlbtn">
                     <option value="">Choose</option>
                     <option value="">Ha Noi</option>
                     <option value="" selected="selected">Ho Chi Minh City</option>
                  </select>

                  <select class="form-controlbtn" id="city" aria-label=".form-select-sm">
                     <option value="" selected>Chọn tỉnh thành</option>
                  </select>
               </div>
               <div class="form-group coll-1">
                  <label>District <em style="line-height: 1">(*)</em></label>
                  <select class="form-controlbtn">
                     <option value="">Choose</option>
                     <option value="">District 8</option>
                     <option value="" selected="selected">District 5</option>
                  </select>

                  <select class="form-controlbtn" id="district" aria-label=".form-select-sm">
                     <option value="" selected>Chọn quận huyện</option>
                  </select>
               </div>
               <div class="form-group coll-1">
                  <label>Ward <em style="line-height: 1">(*)</em></label>
                  <select class="form-controlbtn">
                     <option value="">Choose</option>
                     <option value="">Ward 2</option>
                     <option value="" selected="selected">Ward 6</option>
                  </select>

                  <select class="form-controlbtn" id="ward" aria-label=".form-select-sm">
                     <option value="" selected>Chọn phường xã</option>
                  </select>
               </div>

               <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
               <script>
                  var citis = document.getElementById("city");
                  var districts = document.getElementById("district");
                  var wards = document.getElementById("ward");
                  var Parameter = {
                     url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
                     method: "GET",
                     responseType: "application/json",
                  };
                  var promise = axios(Parameter);
                  promise.then(function(result) {
                     renderCity(result.data);
                  });

                  function renderCity(data) {
                     for (const x of data) {
                        citis.options[citis.options.length] = new Option(x.Name, x.Id);
                     }
                     citis.onchange = function() {
                        district.length = 1;
                        ward.length = 1;
                        if (this.value != "") {
                           const result = data.filter(n => n.Id === this.value);

                           for (const k of result[0].Districts) {
                              district.options[district.options.length] = new Option(k.Name, k.Id);
                           }
                        }
                     };
                     district.onchange = function() {
                        ward.length = 1;
                        const dataCity = data.filter((n) => n.Id === citis.value);
                        if (this.value != "") {
                           const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

                           for (const w of dataWards) {
                              wards.options[wards.options.length] = new Option(w.Name, w.Id);
                           }
                        }
                     };
                  }
               </script>
            </div>
            <div class="form-group coll-2">
               <label>Number of houses, streets, locality / village / team <em style="line-height: 1">(*)</em></label>
               <input class="form-controlbtn" name="fields[address]" type="text" data-msg-required="Staying address field is required" />
            </div>
            <style>
               input::-webkit-outer-spin-button,
               input::-webkit-inner-spin-button {
                  -webkit-appearance: none;
                  margin: 0;
               }
            </style>
            <div class="row-form">
               <div class="form-group coll-1">
                  <label>Phone <em style="line-height: 1">(*)</em></label>
                  <input class="form-controlbtn" name="fields[phone]" type="number" value="09xx" data-mgs-number="Phone numbers may only be entered" data-msg-required="Phone field is required" data-msg-phone-vn="invalid phone number" />
               </div>
               <!-- <div class="form-group coll-1">
                  <label >Email </label>
                  <input class="form-controlbtn" name="fields[email]" data-msg-email="Email address invalid" type="text" onblur="this.value=removeSpaces(this.value);"/>
               </div> -->
            </div>

            <div class="form-group coll-2"><b>Comorbidities <span class="text-required">(*)</span></b></div>
            <div class="form-group coll-2">
               <table border="1" class="table-1">
                  <thead>
                     <tr>
                        <th scope="col"></th>
                        <th scope="col" style="width:100px;" class="text-center">Yes</th>
                        <th scope="col" style="width:100px;" class="text-center">No</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>
                           Older Age
                           <span class="text-required">(*)</span>
                           <br>
                           <label>
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="a" value="1" />
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="a" value="2" />
                        </td>
                     </tr>
                     <tr>
                        <td>
                           Lung problems, including asthma
                           <span class="text-required">(*)</span>
                           <br>
                           <label>
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="b" value="1" />
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="b" value="2" />
                        </td>
                     </tr>
                     <tr>
                        <td>
                           Heart disease
                           <span class="text-required">(*)</span>
                           <br>
                           <label>
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="c" value="1" />
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="c" value="2" />
                        </td>
                     </tr>
                     <tr>
                        <td>
                           Brain and nervous system conditions
                           <span class="text-required">(*)</span>
                           <br>
                           <label>
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="d" value="1" />
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="d" value="2" />
                        </td>
                     </tr>
                     <tr>
                        <td>
                           Diabetes and obesity
                           <span class="text-required">(*)</span>
                           <br>
                           <label>
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="e" value="1" />
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="e" value="2" />
                        </td>
                     </tr>
                     <tr>
                        <td>
                           Cancer and certain blood disorders
                           <span class="text-required">(*)</span>
                           <br>
                           <label>
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="e" value="1" />
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="e" value="2" />
                        </td>
                     </tr>
                     <tr>
                        <td>
                           Weakened immune system
                           <span class="text-required">(*)</span>
                           <br>
                           <label>
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="e" value="1" />
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="e" value="2" />
                        </td>
                     </tr>
                     <tr>
                        <td>
                           Chronic kidney or liver disease
                           <span class="text-required">(*)</span>
                           <br>
                           <label>
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="e" value="1" />
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="e" value="2" />
                        </td>
                     </tr>
                     <tr>
                        <td>
                           Mental health conditions
                           <span class="text-required">(*)</span>
                           <br>
                           <label>
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="e" value="1" />
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="e" value="2" />
                        </td>
                     </tr>
                     <tr>
                        <td>
                           Down syndrome
                           <span class="text-required">(*)</span>
                           <br>
                           <label>
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="e" value="1" />
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="e" value="2" />
                        </td>
                     </tr>
                     <!-- <tr>
                           <td>
                              Other
                              <span class="text-required">(*)</span>
                              <br>
                              <label>   
                           </td> 
                           <td class="text-center" colspan="2"> 
                              <textarea name="" id="" cols="30" rows="10" style="resize:none"></textarea>
                           </td>
                     </tr> -->
                  </tbody>
               </table>
               <!-- <div class="form-group coll-2">
                  <div>date</div>
                  <input type="date"/>
               </div> -->
               <!-- <div>The data you provide is completely confidential and only serves for the prevention of epidemics, under the management of the Vietnam National Steering Committee for COVID-19 Epidemic Prevention and Control. When you press "Submit", you understand and agree with the above statement.</div>
               <div class="text-center"> <button class="btn-submit" type="submit">Submit</button> </div> -->
            </div>

            <!-- Symptoms -->
            <div class="form-group coll-2"><b>Symptoms <span class="text-required">(*)</span></b></div>
            <div class="form-group coll-2">
               <table border="1" class="table-1">
                  <thead>
                     <tr>
                        <th scope="col"></th>
                        <th scope="col" style="width:100px;" class="text-center">Yes</th>
                        <th scope="col" style="width:100px;" class="text-center">No</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>
                           Fever or chills
                           <span class="text-required">(*)</span>
                           <br>
                           <label>
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="a" value="1" />
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="a" value="2" />
                        </td>
                     </tr>
                     <tr>
                        <td>
                           Cough
                           <span class="text-required">(*)</span>
                           <br>
                           <label>
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="b" value="1" />
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="b" value="2" />
                        </td>
                     </tr>
                     <tr>
                        <td>
                           Headache
                           <span class="text-required">(*)</span>
                           <br>
                           <label>
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="c" value="1" />
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="c" value="2" />
                        </td>
                     </tr>
                     <tr>
                        <td>
                           Fatigue
                           <span class="text-required">(*)</span>
                           <br>
                           <label>
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="d" value="1" />
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="d" value="2" />
                        </td>
                     </tr>
                     <tr>
                        <td>
                           Shortness of breath or difficulty breathing
                           <span class="text-required">(*)</span>
                           <br>
                           <label>
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="e" value="1" />
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="e" value="2" />
                        </td>
                     </tr>
                     <tr>
                        <td>
                           Muscle or body aches
                           <span class="text-required">(*)</span>
                           <br>
                           <label>
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="e" value="1" />
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="e" value="2" />
                        </td>
                     </tr>
                     <tr>
                        <td>
                           New loss of taste or smell
                           <span class="text-required">(*)</span>
                           <br>
                           <label>
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="e" value="1" />
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="e" value="2" />
                        </td>
                     </tr>
                     <tr>
                        <td>
                           Sore throat
                           <span class="text-required">(*)</span>
                           <br>
                           <label>
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="e" value="1" />
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="e" value="2" />
                        </td>
                     </tr>
                     <tr>
                        <td>
                           Congestion or runny nose
                           <span class="text-required">(*)</span>
                           <br>
                           <label>
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="e" value="1" />
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="e" value="2" />
                        </td>
                     </tr>
                     <tr>
                        <td>
                           Nausea or vomiting
                           <span class="text-required">(*)</span>
                           <br>
                           <label>
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="e" value="1" />
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="e" value="2" />
                        </td>
                     </tr>
                     <tr>
                        <td>
                           Diarrhea
                           <span class="text-required">(*)</span>
                           <br>
                           <label>
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="e" value="1" />
                        </td>
                        <td class="text-center">
                           <input type="Radio" name="e" value="2" />
                        </td>
                     </tr>
                     <!-- <tr>
                           <td>
                              Other
                              <span class="text-required">(*)</span>
                              <br>
                              <label>   
                           </td> 
                           <td class="text-center" colspan="2"> 
                              <textarea name="" id="" cols="30" rows="10" style="resize:none"></textarea>
                           </td>
                     </tr> -->
                  </tbody>
               </table>
               <!-- <div class="form-group coll-2">
                  <div>date</div>
                  <input type="date"/>
               </div> -->
               <div style="color: red;text-transform: none;">The data you provide is completely confidential and only serves for the prevention of epidemics, under the management of the Vietnam National Steering Committee for COVID-19 Epidemic Prevention and Control. When you press "Submit", you understand and agree with the above statement.</div>
               <div class="text-center"> <button class="btn-submit" type="submit">Submit</button> </div>
            </div>

         </div>
      </form>
   </div>
   <!-- end coronata -->
   <!--  footer -->
   <?php

   include("includes/footer.php");

   ?>
   <!-- end footer -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/custom.js"></script>
</body>

</html>