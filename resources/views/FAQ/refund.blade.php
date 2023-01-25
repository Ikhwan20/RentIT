<x-guest-layout>
  <div>
    <style>
      h2{
        padding-left:5%;
      }
      form
      {
        text-align: center;
      }
      </style>
  </div>
    <div>

      <h1 style="text-align:center";><b>Return and Refund Policy</b></h1>
      <br>
      <h2>Policy </h2>
      
      <p style="margin-left:3%">We always make sure our users satisfy with our service. To ensure both party can satisy with our service, we implement certain policy to proctect both renter and rentee</p>
    
      <p style="margin-left:3%">For any defect/broken utilities that been received either renter or rentee, we will ask the respective user to return back to the owner as we always keep policy to always ensure every item that been display in our website must been in good condition</p>
     
      <p style="margin-left:3%">For any refund utilites, the renter will have 48 hour to ask any renfund IF the utilities received had problem.</p>
      <br>
      <p style="margin-left:3%"><i> any inquries you may contact our supportdesk via chatBot</i></p>


      <h3 style="margin-left:3%">Guide To Return and Refund :</h3>
      <ol style="margin-left:3%">
        <li><i>1.) Go to refund policy page</i></li>
        <br>
        <li><i>2.) Snap pictures of the defective utilities</i></li>
        <br>
        <li><i>3.) Fill out the form</i></li>
        <br>
        <li><i>4.) Describe the problem in the form box</i></li>
        <br>
        <li><i>5.) Submit the form</i></li>
      </ol>
    <br><br>
    <form method="post" action="//submit.form" onSubmit="return validateForm();" style="margin-left:3%">
        <div style="max-width: 100px;">
        </div>
        <div style="padding-bottom: 18px;font-size : 24px;">Report An Issue</div>
        <div style="padding-bottom: 18px;">Reported by<span style="color: red;"> *</span><br/>
        <input type="text" id="data_2" name="data_2" style="max-width : 450px;" class="form-control"/>
        </div>
        <div style="padding-bottom: 18px;">Severity<br/>
        <select id="data_3" name="data_3" style="max-width : 300px;" class="form-control"><option>Critical</option>
        <option>Major</option>
        <option>Moderate</option>
        <option>Minor</option>
        <option>Cosmetic</option>
        </select>
        </div>
        <div style="padding-bottom: 18px;">Priority<br/>
        <select id="data_4" name="data_4" style="max-width : 300px;" class="form-control"><option>Low</option>
        <option>Medium</option>
        <option>High</option>
        </select>
        </div>
        <div style="padding-bottom: 18px;">Reproducibility<br/>
        <select id="data_5" name="data_5" style="max-width : 300px;" class="form-control"><option>10%</option>
        <option>25%</option>
        <option>50%</option>
        <option>75%</option>
        <option>100%</option>
        </select>
        </div>
        <div style="padding-bottom: 18px;">Summary<span style="color: red;"> *</span><br/>
        <input type="text" id="data_6" name="data_6" style="max-width : 450px;" class="form-control"/>
        </div>
        <div style="padding-bottom: 18px;">Description<br/>
        <textarea id="data_7" false name="data_7" style="max-width : 450px;" rows="6" class="form-control"></textarea>
        </div>
        <div style="padding-bottom: 18px;"><input name="skip_Submit" value="Submit" type="submit"/></div>
        <div>
        <div style="float:right"><a href="https://www.100forms.com" id="lnk100" title="form to email">form to email</a></div>
        <script src="https://www.100forms.com/js/FORMKEY:2XNKCQE24JXF/SEND:rajashawal246@gmail.com" type="text/javascript"></script>
        </div>
        </form>
        
        <script type="text/javascript">
        function validateForm() {
        if (isEmpty(document.getElementById('data_2').value.trim())) {
        alert('Reported by is required!');
        return false;
        }
        if (isEmpty(document.getElementById('data_6').value.trim())) {
        alert('Summary is required!');
        return false;
        }
        return true;
        }
        function isEmpty(str) { return (str.length === 0 || !str.trim()); }
        function validateEmail(email) {
        var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z]{2})?)$/i;
        return isEmpty(email) || re.test(email);
        }
        </script>
      

      <p style="margin-left:3%">This will take 3 working days to get respond from one of our admin</p>
  
      
    </div>
  </x-guest-layout>