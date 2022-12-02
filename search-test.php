<?php

session_start();

include("includes/db.php");
include("includes/header.php");

?>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <?php

		// include("includes/navhead.php");

		?>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
		
		<!--**********************************
            Chat box End
        ***********************************-->


		
		
        <!--**********************************
            Header start
        ***********************************-->
        <?php

		include("includes/main.php");

		?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php

		//include("includes/sidebar.php");

		?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <!-- <br><br><br> -->
   <div class="container-search">
      <form action="" id="searchbar">
         <i class="fas fa-search" ></i>
         <input type="text" placeholder="Enter your phone number">
         <button type="submit">Search</button>
      </form>
   </div>
    <!-- <br><br><br><br> -->

    <div class="coronata">
    <form action="">
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
         <div class="row-form">
               <div class="form-group coll-1">
                  <label >Full name (CAPITAL LETTERS)<em style="line-height: 1">(*)</em></label>
                  <input class="form-controlbtn" type="text" name="fields[fullName]"  style="text-transform: uppercase;" data-msg-required="Full name field is required"/>
               </div>
               <div class="form-group coll-1">
                  <label >Passport number / ID card</label>
                  <input class="form-controlbtn" type="text" name="fields[passport]"  data-msg-required="Passport number or other legal document field is required"/>
               </div>
         </div>
         <div class="row-form">
               <div class="form-group coll-1">
                  <label >Year of Birth <em style="line-height: 1">(*)</em></label>
                  <input type="hidden" id="input91987" value="2002" class="vhv-form-number" name="fields[birthYear]">
                  <input class="form-controlbtn" type="text"  size="16" />
               </div>
               <div class="form-group coll-1">
                  <label >Gender  <em style="line-height: 1">(*)</em></label>
                  <div class="form-group">
                     <table class="radio-table">
                           <tr>
                              <td>
                                 <label>
                                       <input type="radio" value="Male" checked="checked" name="fields[gender]" >&nbsp;Male
                                 </label>
                              </td>
                              <td>&nbsp;</td>
                              <td>
                                 <label>
                                       <input type="radio" value="Female"  name="fields[gender]" >&nbsp;Female
                                 </label>
                              </td>
                              <td>&nbsp;</td>
                              <td>
                                 <label>
                                       <input type="radio" value="Other"  name="fields[gender]" >&nbsp;Other
                                 </label>
                              </td>
                              <td>&nbsp;</td>
                           </tr>
                     </table>
                  </div>
               </div>
               <div class="form-group coll-1"> 
                  <label >Nationality  <em style="line-height: 1">(*)</em></label>
                  <select class="form-controlbtn">
                     <option value="">Choose</option>
                     <option value="" >Chinese</option>
                     <option value="" selected="selected">Vietnamese</option>
                  </select>
               </div>
         </div>
         <div class="form-group coll-1"><b>Contact address in Vietnam</b></div>
         <div class="row-form">
               <div class="form-group coll-1">
                  <label >Province  <em style="line-height: 1">(*)</em></label>
                  <select class="form-controlbtn">
                     <option value="">Choose</option>
                     <option value="" >Ha Noi</option>
                     <option value="" selected="selected">Ho Chi Minh City</option>
                  </select>
               </div>
               <div class="form-group coll-1">
                  <label >District  <em style="line-height: 1">(*)</em></label>
                  <select class="form-controlbtn">
                     <option value="">Choose</option>
                     <option value="" >District 8</option>
                     <option value="" selected="selected">District 5</option>
                  </select>
               </div>
               <div class="form-group coll-1">
                  <label >Ward  <em style="line-height: 1">(*)</em></label>
                  <select class="form-controlbtn">
                     <option value="">Choose</option>
                     <option value="" >Ward 2</option>
                     <option value="" selected="selected">Ward 6</option>
                  </select>
               </div>
         </div>
         <div class="form-group coll-2">
               <label >Number of houses, streets, locality / village / team <em style="line-height: 1">(*)</em></label>
               <input class="form-controlbtn" name="fields[address]" type="text" data-msg-required="Staying address field is required"/>
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
                  <label >Phone  <em style="line-height: 1">(*)</em></label>
                  <input class="form-controlbtn" name="fields[phone]" type="number" value="09xx" data-mgs-number="Phone numbers may only be entered" data-msg-required="Phone field is required" data-msg-phone-vn="invalid phone number"/>
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
                           <th scope="col" ></th> 
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
                           <th scope="col" ></th> 
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
               <!-- Testing Result-->
               <br><br>
               <div class="form-group coll-2"><b>Testing Result <span class="text-required">(*)</span></b></div>
               <div class="form-group coll-1"> 
                  <label >Quick Test <em style="line-height: 1"></em></label>
                  <select class="form-controlbtn">
                     <option value="" selected="selected">Choose</option>
                     <option value="" >Positive</option>
                     <option value="">Negative</option>
                  </select>
               </div>
               <div class="form-group coll-1"> 
                  <label >PCR Test <em style="line-height: 1"></em></label>
                  <select class="form-controlbtn">
                     <option value="" selected="selected">Choose</option>
                     <option value="" >Positive</option>
                     <option value="">Negative</option>
                  </select>
               </div>
               <div class="form-group coll-1">
                  <label >SP02 <em style="line-height: 1"></em></label>
                  <input type="hidden" id="input91987"  class="vhv-form-number" placeholder="%" >
                  <input class="form-controlbtn" type="number"  size="16"  placeholder="%"/>
               </div>
               <div class="form-group coll-1">
                  <label >Respiratory rate <em style="line-height: 1"></em></label>
                  <input type="hidden" id="input91987"  class="vhv-form-number" placeholder="/ bpm" >
                  <input class="form-controlbtn" type="number"  size="16" value="%" placeholder="/ bpm"/>
               </div>
               <br>
               <div class="form-group coll-2"><b>Treatment <span class="text-required">(*)</span></b></div>
               <!-- <div class="form-group coll-1">
                  <label >Email </label>
                  <input class="form-controlbtn" name="fields[email]" data-msg-email="Email address invalid" type="text" onblur="this.value=removeSpaces(this.value);"/>
               </div> -->
               </div>
               <br>
               <div class="text-center"> <button class="btn-submit" type="submit">Submit</button> </div>
               <br>
               <div class="text-center"> <button class="btn-submit" type="submit">Print</button> </div>
               </from>
         </div>
         
         </div>
            
   </div>
   
      <!-- end coronata -->

<!-- Script -->
    <!-- <script
    src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
    crossorigin="anonymous"></script>

    <script src="https:////cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script>
    $(document).ready( function () {
    $('#myTable').DataTable(
        {
            lengthMenu: [[5,10,50,100,-1],[5,10,50,100,"All"]],
        }
    );
    } );
    </script> -->
        <!--**********************************
            Content body end
        ***********************************-->

        <!-- <br> -->
        <!--**********************************
            Footer start
        ***********************************-->
        <?php

		include("includes/footer.php");

		?>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->



</body>

</html>