<!DOCTYPE html>
<html>
<head>
    <title>CURD REST API in Codeigniter</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/style.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>public/css/apijs.js"></script>
</head>
<body>
   <table>
       <tr>
           <td>
               <form onsubmit="event.preventDefault();onFormSubmit();" autocomplete="off">
                <div>
                   <label>Họ tên</label><label class="validation-error hide" id="nameValidationError">This field is required.</label>
                   <input type="text" name="name" id="name">
                </div>
                <div>
                   <label>ClassID</label>
                   <input type="text" name="classID" id="classID">
                </div>
                <div>
                   <label>Tuổi</label>
                   <input type="text" name="age" id="age">
                </div>
                <div>
                   <label>Giới tính</label>
                   <input type="text" name="gender" id="gender">
                </div>
                <div>
                   <label>Địa chỉ</label>
                   <input type="text" name="address" id="address">
                </div>
                <div>
                   <label>Phone</label>
                   <input type="text" name="phone" id="phone">
                </div>
                <div>
                   <label>Email</label>
                   <input type="text" name="email" id="email">
                </div>
                <div class="form-action-button">
                   <input type="submit" value="Submit">
                </div>
               </form>
           </td>
           <td>
                <table class="list" id="studentlist">
                    <thead>
                        <tr>
                            <td>Họ tên</td>
                            <td>ClassID</td>
                            <td>Tuổi</td>
                            <td>Giới tính</td>
                            <td>Địa chỉ</td>
                            <td>Phone</td>
                            <td>Email</td>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
           </td>
       </tr>
   </table>
   
</body>
</html>
