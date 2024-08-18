<div class="signup-w3ls">
    <div class="signup-agile1">
        <form action="#" method="post">
        
            <div class="form-control">
                <label class="header">Profile Photo:</label>
                
                <input id="image" type="file" name="profile_photo" placeholder="Photo" required="" capture>
            </div>
            
            <div class="form-control">
                <label class="header">Store Name :</label>
                <input type="text" id="store_name" name="store_name" placeholder="Store Name" title="Please enter your First Name" required="">
            </div>
            
            <div class="form-control">
                <label class="header">Store Type :</label>
                <input type="text" id="store_type" name="store_type" placeholder="Store Type" title="Please enter your Last Name" required="">
            </div>

            <div class="form-control">
                <label class="header">Owner Type :</label>
                <input type="text" id="owner_type" name="owner_type" placeholder="Owner Type" title="Please enter a valid email" required="">
            </div>

            <div class="form-control">
                <label class="header">Website :</label>
                <input type="url" id="website" name="website" placeholder="Website" id="password1" required="">
            </div>

            <div class="form-control">
                <label class="header">Contact Number :</label>
                <input type="text" id="contact_number" name="contact_number" placeholder="Contact Number" required="">
            </div>

            <div class="form-control">
                <label class="header">Contact Email :</label>
                <input type="email" id="contact_email" name="contact_email" placeholder="Contact Email" required="">
            </div>
            
            <input type="submit" class="register" value="Register">

        </form>
    </div>
</div>
function previewProfileImage( uploader ) {   
    //ensure a file was selected 
    if (uploader.files && uploader.files[0]) {
        var imageFile = uploader.files[0];
        var reader = new FileReader();    
        reader.onload = function (e) {
            //set the image data as source
            $('#profileImage').attr('src', e.target.result);
        }    
        reader.readAsDataURL( imageFile );
    }
}

$("#imageUpload").change(function(){
    previewProfileImage( this );
});
Efficiency note: You can make it more efficient if you use createObjectURL instead of reading data as URL.

function fasterPreview( uploader ) {
    if ( uploader.files && uploader.files[0] ){
          $('#profileImage').attr('src', 
             window.URL.createObjectURL(uploader.files[0]) );
    }
}