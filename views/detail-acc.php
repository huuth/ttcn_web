

<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/inc/header.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/inc/navigator.php';
   require_once $_SERVER['DOCUMENT_ROOT'].'/models/Rent.php';
   require_once $_SERVER['DOCUMENT_ROOT'].'/models/User.php';
   require_once $_SERVER['DOCUMENT_ROOT'].'/models/Type.php';
   require_once $_SERVER['DOCUMENT_ROOT'].'/models/Address.php';?>

<section id="aa-property-header">
        <div class="container1">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-property-header-inner">
                        <h2>Thông tin chi tiết</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">TRANG CHỦ</a></li>
                            <li class="active">Đăng tin</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="aa-properties">
    <!-- End Proerty header  -->
     <!-- <div  style="margin-top:25px; float: left; margin-left: 30px; margin-right: 50px ">
          
    
         <div class="dashboard-account row">
            <div >
                <div class="panel-left" style="background: #32befb; width: 163px; height: 50px">
                    <span>Tài khoản</span><br />
                    <span>01698545549</span>
                </div>
                <ul class="content-detail" >
                    <li class="active">
                        <a href="">Thông tin tài khoản</a>
                    </li>
                     <li class="">
                        <a href="">Các tin đã đăng</a>
                    </li>
                </ul>
            </div>
         </div> -->
      </div>
      <div class="edit-infor" style=" width: 25%; padding: 0 0 0 30px; margin: auto">
         <form class="content" method="post" action="" id="edit-account">
   <div class="form-group gender-select-wrap" id="register_name">
      <label class="control-label" for="pasword">Giới tính:</label>
      <div class="input-wrap">
         <div class="row">
            <div class="col-xs-4">
               <label for="male" class="icheck-wrap gender-select">
                  Nam
               </label>
            </div>
            <div class="col-xs-4">
               <label for="female" class="icheck-wrap gender-select">
                  Nữ
               </label>
            </div>
         </div>
         <span class="help-block">Vui lòng chọn giới tính</span>
      </div>
   </div>
   <div class="form-group">
      <label class="control-label" for="full_name">Họ Tên </label>
      <div class="input-wrap">
         <input type="text" enable name="full_name" class="form-control" id="full_name" value="Phương Thảo" placeholder="Họ tên">
         <span class="help-block"></span>
      </div>
   </div>
   <div class="form-group">
      <label class="control-label" for="full_name">Số điện thoại </label>
      <div class="input-wrap">
         <input type="text" enable name="full_name" class="form-control" id="phone" value="0123456789" >
         <span class="help-block"></span>
      </div>
   </div>
   <div class="form-group ">
      <label class="control-label no-lh" for="birthdate">
      Ngày Sinh:
      <span><i>*</i> Không bắt buộc</span>
      </label>
      <div class="input-wrap">
         <div id="birthday-picker" class="birthday-picker">
            <fieldset class="birthday-picker">
               <select class="birth-day form-control" style="display: inline-block;" name="birth[day]">
                  <option value="0">Ngày</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15" selected="selected">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
               </select>
               <select class="birth-month form-control" style="display: inline-block;" name="birth[month]">
                  <option value="0">Tháng</option>
                  <option value="1">01</option>
                  <option value="2">02</option>
                  <option value="3">03</option>
                  <option value="4" selected="selected">04</option>
                  <option value="5">05</option>
                  <option value="6">06</option>
                  <option value="7">07</option>
                  <option value="8">08</option>
                  <option value="9">09</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
               </select>
               <select class="birth-year form-control" style="display: inline-block;" name="birth[year]">
                  <option value="0">Năm</option>
                  <option value="2016">2016</option>
                  <option value="2015">2015</option>
                  <option value="2014">2014</option>
                  <option value="2013">2013</option>
                  <option value="2012">2012</option>
                  <option value="2011">2011</option>
                  <option value="2010">2010</option>
                  <option value="2009">2009</option>
                  <option value="2008">2008</option>
                  <option value="2007">2007</option>
                  <option value="2006">2006</option>
                  <option value="2005">2005</option>
                  <option value="2004">2004</option>
                  <option value="2003">2003</option>
                  <option value="2002">2002</option>
                  <option value="2001">2001</option>
                  <option value="2000">2000</option>
                  <option value="1999">1999</option>
                  <option value="1998">1998</option>
                  <option value="1997">1997</option>
                  <option value="1996">1996</option>
                  <option value="1995" selected="selected">1995</option>
                  <option value="1994">1994</option>
                  <option value="1993">1993</option>
                  <option value="1992">1992</option>
                  <option value="1991">1991</option>
                  <option value="1990">1990</option>
                  <option value="1989">1989</option>
                  <option value="1988">1988</option>
                  <option value="1987">1987</option>
                  <option value="1986">1986</option>
                  <option value="1985">1985</option>
                  <option value="1984">1984</option>
                  <option value="1983">1983</option>
                  <option value="1982">1982</option>
                  <option value="1981">1981</option>
                  <option value="1980">1980</option>
                  <option value="1979">1979</option>
                  <option value="1978">1978</option>
                  <option value="1977">1977</option>
                  <option value="1976">1976</option>
                  <option value="1975">1975</option>
                  <option value="1974">1974</option>
                  <option value="1973">1973</option>
                  <option value="1972">1972</option>
                  <option value="1971">1971</option>
                  <option value="1970">1970</option>
                  <option value="1969">1969</option>
                  <option value="1968">1968</option>
                  <option value="1967">1967</option>
                  <option value="1966">1966</option>
                  <option value="1965">1965</option>
                  <option value="1964">1964</option>
                  <option value="1963">1963</option>
                  <option value="1962">1962</option>
                  <option value="1961">1961</option>
                  <option value="1960">1960</option>
                  <option value="1959">1959</option>
                  <option value="1958">1958</option>
                  <option value="1957">1957</option>
                  <option value="1956">1956</option>
                  <option value="1955">1955</option>
                  <option value="1954">1954</option>
                  <option value="1953">1953</option>
                  <option value="1952">1952</option>
                  <option value="1951">1951</option>
                  <option value="1950">1950</option>
                  <option value="1949">1949</option>
                  <option value="1948">1948</option>
                  <option value="1947">1947</option>
                  <option value="1946">1946</option>
                  <option value="1945">1945</option>
                  <option value="1944">1944</option>
                  <option value="1943">1943</option>
                  <option value="1942">1942</option>
                  <option value="1941">1941</option>
                  <option value="1940">1940</option>
                  <option value="1939">1939</option>
                  <option value="1938">1938</option>
                  <option value="1937">1937</option>
                  <option value="1936">1936</option>
                  <option value="1935">1935</option>
                  <option value="1934">1934</option>
                  <option value="1933">1933</option>
                  <option value="1932">1932</option>
                  <option value="1931">1931</option>
                  <option value="1930">1930</option>
                  <option value="1929">1929</option>
                  <option value="1928">1928</option>
                  <option value="1927">1927</option>
                  <option value="1926">1926</option>
                  <option value="1925">1925</option>
                  <option value="1924">1924</option>
                  <option value="1923">1923</option>
                  <option value="1922">1922</option>
                  <option value="1921">1921</option>
                  <option value="1920">1920</option>
                  <option value="1919">1919</option>
                  <option value="1918">1918</option>
                  <option value="1917">1917</option>
                  <option value="1916">1916</option>
                  <option value="1915">1915</option>
                  <option value="1914">1914</option>
                  <option value="1913">1913</option>
                  <option value="1912">1912</option>
                  <option value="1911">1911</option>
                  <option value="1910">1910</option>
                  <option value="1909">1909</option>
                  <option value="1908">1908</option>
                  <option value="1907">1907</option>
                  <option value="1906">1906</option>
                  <option value="1905">1905</option>
                  <option value="1904">1904</option>
                  <option value="1903">1903</option>
                  <option value="1902">1902</option>
                  <option value="1901">1901</option>
                  <option value="1900">1900</option>
                  <option value="1899">1899</option>
                  <option value="1898">1898</option>
                  <option value="1897">1897</option>
                  <option value="1896">1896</option>
               </select>
               <input type="hidden" name="birthdate" id="birthdate" value="1995-04-15">
            </fieldset>
         </div>
         <span class="help-block"></span>
      </div>
   </div>
   <div class="form-group">
      <label class="control-label" for="email">Email</label>
      <div class="input-wrap">
         <input type="email" disabled="" value="heligrass.puta154@gmail.com" class="form-control" name="email" id="email" placeholder="Email">
      </div>
   </div>
   <div class="form-group">
      <div class="input-wrap">
         <label for="change-password" class="icheck-wrap">
            Thay đổi mật khẩu.
         </label>
      </div>
   </div>
   <div class="password-group">
      <div class="form-group">
         <label class="control-label" for="old_password">Mật khẩu cũ</label>
         <div class="input-wrap">
            <input type="password" name="old_password" class="form-control" id="old_password" value="" autocomplete="off" placeholder="Nhập mật khẩu cũ">
            <span class="help-block"></span>
         </div>
      </div>
      <div class="form-group">
         <label class="control-label" for="new-password">Mật khẩu mới</label>
         <div class="input-wrap">
            <input type="password" name="new_password" class="form-control" id="new_password" value="" autocomplete="off" placeholder="Nhập mật khẩu mới">
            <span class="help-block"></span>
         </div>
      </div>
      <div class="form-group">
         <label class="control-label" for="re_new_password">Nhập lại</label>
         <div class="input-wrap">
            <input type="password" name="re_new_password" class="form-control" id="re_new_password" value="" autocomplete="off" placeholder="Nhập lại mật khẩu mới">
            <span class="help-block"></span>
         </div>
      </div>
   </div>
   <div class="form-group">
      <div class="input-wrap">
         <input type="hidden" name="customer_birthdate" value="1995-04-15">
         <button type="submit" class="btn btn-info btn-block btn-update">Cập nhật</button>
      </div>
   </div>
</form>
      </div>
      <div class="right-bar col-md-9">
         <div class="dashboard-header">
            <h2>Các tin đã đăng</h2>
            <a href="/sales/order/history">Xem tất cả</a>
         </div>
         <div>

            <table class="table" border="1px">
               <thead>
                  <tr>
                     <th>
                        <span class="hidden-xs hidden-sm hidden-md">Mã tin</span>
                        <span class="hidden-lg">Code</span>
                     </th>
                     <th>Ngày đăng</th>
                     <th width="150px">Ngày ẩn</th>
                     <th>Tên tin</th>
                     <th width="150px">Trạng thái</th>
                  </tr>
               </thead>
               <?php 
                  foreach($data['user']['rent'] as $rent):?>
               <tbody>
                  <tr>
                     <td><a href="/sales/order/view?code=81432288"><?php echo $rent['rent_id']?></a></td>
                     <td><?php echo $rent['post_time']?></td>
                     <td><?php if(isset($rent['drop_time'])){
                           echo $rent['drop_time']; }?></td>
                     <td><a href="index.php?ctr=detail&act=getIndex&rent_id=<?php echo $rent['rent_id'];?>"><?php echo $rent['rent_name']?></a></td>
                     <td><span class="color-2">Đã duyệt</span></td>
                  </tr>
                  <?php endforeach; ?>
               </tbody>
            </table>
         </div>
      <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="box-related-product-footer"></div>
         </div>
      </div>
      <footer class="wrap-footer">
      <input type="hidden" name="TIKI_CSRF_TOKEN" value="61ad631ea5b9d876dbd38ed561fe422b" />
      <!-- END TOKEN -->
</section>
      <footer id="aa-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-footer-area">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="aa-footer-left">
                                    <p>Designed by
                                        <a rel="nofollow" href="#"></a>Team KIKA</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="aa-footer-middle">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="aa-footer-right">
                                    <a href="#">TRANG CHỦ</a>
                                    <a href="#">HỔ TRỢ</a>
                                    <a href="#">HỎI ĐÁP</a>
                                    <a href="#">LIÊN HỆ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/inc/footer.php';?>