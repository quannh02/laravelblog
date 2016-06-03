            <div class="menu-page-menu">
                <div class="dropdown">
                    <a href="#" data-toggle="dropdown" aria-expanded="false"><i class="glyphicon glyphicon-home"></i>Danh mục xe</a>
                    <ul class="dropdown-menu level1">
                                                <li class="dropdown-submenu">
                            <a href=""><span class="glyphicon glyphicon-oil"></span>Hãng xe</a>
                            <ul class="dropdown-menu level2">
                                    <li class="pull-left level2-i"><a class="color-txt" href=""></a>
                                    <ul class="level3">
                                    @if(isset($brands))
                                    @foreach($brands as $brand)  
                                    
                                          <li><a href="{{ url('brand', $brand->hang_xe )}}">{{ $brand->hang_xe }}</a></li>
                                    @endforeach
                                    @endif
                                    </ul>
                                </li>
                                    <li class="pull-left level2-i"><a class="color-txt" href="frontend/product/pros/11/ccat"></a>
                                    <ul class="level3">
                                      
                                        
                                          <li><a href=""></a></li>
                                      
                                    </ul>
                                                                                                          
                            </ul>
                            </li>
                            <li class="dropdown-submenu">
                            <a href=""><span class="glyphicon glyphicon-cd"></span>Số chỗ</a>
                            <ul class="dropdown-menu level2">
                                    <li class="pull-left level2-i"><a class="color-txt" href=""></a>
                                    <ul class="level3">
                                      @foreach($socho as $cho)
                                      <li><a href="{{ url('socho', $cho->socho_xe) }}">{{ $cho->socho_xe }} chỗ</a></li>
                                      @endforeach
                                    
                                    </ul>
                                    </li>
                            
                              </ul>
                              </li>
                                               
                                                                          
                    </ul>
                </div>
            </div><!--end menu-page-menu-->                        

            <div class="tintuc">
                    <h3>Tin tức mới</h3>
                    <div class="tintucmoinhat">
                             @foreach($tintucs as $tin)
                            <div class="otintuc">
                             
                                <h4><a href="{{ url('chitiettintuc', $tin->id )}}" class="askhoe">{{ $tin->tieude }}</a></h4>
                                <p>{{ substr( $tin->noidung,  0, 50) }}</p>
                                <a class="doctiep" href="{{ url('chitiettintuc', $tin->id )}}">Đọc tiếp</a>
                              
                            </div>
                             @endforeach
                            
                    </div>
                    
                </div>
 
         