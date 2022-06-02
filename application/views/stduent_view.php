<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/style.css">
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/apijs.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/animation.js"></script>
<title>Quản lý sinh viên</title>
</head>

<body>
	<div class="container">
		<div class="navigation" id="navigation">
			<ul>
				<li>
					<a href="#">
						<span class="icon"><ion-icon name="school-outline"></ion-icon></span>
						<span class="title">Entrepid Advisors</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon"><ion-icon name="home-outline"></ion-icon></span>
						<span class="title">Bảng tin</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon"><ion-icon name="copy-outline"></ion-icon></ion-icon></span>
						<span class="title">Danh mục</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon"><ion-icon name="person-outline"></ion-icon></span>
						<span class="title">Sinh viên</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon"><ion-icon name="apps-outline"></ion-icon></span>
						<span class="title">Lớp học</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon"><ion-icon name="notifications-outline"></ion-icon></span>
						<span class="title">Thông báo</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon"><ion-icon name="log-in-outline"></ion-icon></span>
						<span class="title">Đăng xuất</span>
					</a>
				</li>
			</ul>
		</div>

		<div class="main" id="main">

			<div class="topbar">
				<div class="toogle" id="toogle">
					<ion-icon name="menu-outline"></ion-icon>
				</div>
			</div>

			<div class="detaillist">
				<div class="recentStudent">
					<div class="cardHeader">
                  		<h2>Recent Student</h2>
                    	<a href="" class="btn">
                        	<span class="adminicon"><ion-icon name="add-outline"></ion-icon></span> 
                    	</a>
          			</div>  

          		<table>
            		<thead>
              			<tr>
                			<td>Họ tên</td>
                			<td>Lớp</td>
               			 	<td>Tuổi</td>
                			<td>Giới tính</td>
                			<td>Địa chỉ</td>
                			<td>Điện thoại</td>
                			<td>Email</td>
                			<td>Quản lý</td>
              			</tr>
            		</thead>
            		<tbody>
             
              		<tr>
                		<td></td>
                		<td><span class="status delivered"></span></td>
                		<td></td>
                		<td></td>
                		<td></td>
                		<td></td>
                		<td></td>
                		<td>
                  <a class="admin" href="#">
                    <span class="adminicon"><ion-icon name="caret-forward-outline"></ion-icon></span>
                  </a>
                </td>
                <td>
                  <a class="admin" href="#">
                    <span class="adminicon"><ion-icon name="trash-outline"></ion-icon></span>
                  </a>
                </td>
              </tr>
            
            </tbody>
          </table>
				</div>
				
			</div>
		</div>
	</div>
</body>
</html>