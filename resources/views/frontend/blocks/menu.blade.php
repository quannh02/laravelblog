<div class="col-lg-12 hidden-md hidden-sm hidden-xs clearfix">
            <div class="menu-page-menu">
                <div class="dropdown">
                    <a href="#" data-toggle="dropdown" aria-expanded="false"><i class="glyphicon glyphicon-home"></i>Danh mục xe</a>
                    <ul class="dropdown-menu level1">
                                                <li class="dropdown-submenu">
                            <a href="frontend/product/pros/1/pcat"><span class="glyphicon glyphicon-oil"></span>Hãng xe</a>
                            <ul class="dropdown-menu level2">
                                    <li class="pull-left level2-i"><a class="color-txt" href="frontend/product/pros/10/ccat"></a>
                                    <ul class="level3">
                                    @foreach($brands as $brand)  
                                    
                                          <li><a href="{{ url('list', $brand->hang_xe )}}">{{ $brand->hang_xe }}</a></li>
                                    @endforeach
                                    </ul>
                                </li>
                                    <li class="pull-left level2-i"><a class="color-txt" href="frontend/product/pros/11/ccat"></a>
                                    <ul class="level3">
                                      
                                        
                                          <li><a href=""></a></li>
                                      
                                    </ul>
                                                                                                          
                            </ul>
                            </li>
                            <li class="dropdown-submenu">
                            <a href="frontend/product/pros/2/pcat"><span class="glyphicon glyphicon-cd"></span>Số chỗ</a>
                            <ul class="dropdown-menu level2">
                                    <li class="pull-left level2-i"><a class="color-txt" href="frontend/product/pros/38/ccat"></a>
                                    <ul class="level3">
                                      <li><a href="frontend/product/pros/39/iccat">4 chỗ</a></li>
                                      <li><a href="frontend/product/pros/40/iccat">7 chỗ</a></li>
                                      <li><a href="frontend/product/pros/42/iccat">16 chỗ</a></li>
                                      <li><a href="frontend/product/pros/43/iccat">29 chỗ</a></li>
                                      <li><a href="frontend/product/pros/43/iccat">35 chỗ</a></li>
                                      <li><a href="frontend/product/pros/43/iccat">45 chỗ</a></li>
                                    </ul>
                                    </li>
                            
                              </ul>
                              </li>
                                                <li class="dropdown-submenu">
                            <a href="frontend/product/pros/8/pcat"><span class="glyphicon glyphicon-blackboard"></span>Máy tính &amp; Linh kiện</a>
                            <ul class="dropdown-menu level2">
                                                                                                       
                            </ul>
                            </li>
                                                <li class="dropdown-submenu">
                            <a href="frontend/product/pros/9/pcat"><span class="glyphicon glyphicon-print"></span>Thiết bị văn phòng</a>
                            <ul class="dropdown-menu level2">
                                                                                                       
                            </ul>
                        </li>
                                                                          
                    </ul>
                </div>
            </div><!--end menu-page-menu-->                        
        </div>
 
         