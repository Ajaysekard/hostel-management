<?php include("config.php"); ?>
<?php include("header1.php"); ?>
     <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12 panel-red">
                <h1 class="page-header titlehms "><i class="fa fa-hand-o-right"></i>Dashboard<i class="fa fa-hand-o-left"></i></h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-lg-4">
                   <div class="panel panel-red">
                    <div class="panel-heading">
                        <i class="fa fa-list-alt fa-fw"></i>Annexure & Polytechnique
                    </div>
                    <div class="panel-body">
                        <div id="accordion" class="panel-group">
                                
                               <img src="images/poly.jpg" width="300" height="202" alt=""/>
                            </div>
                    </div>
                    <div class="panel-footer">
                      
                    </div>
            </div>
             </div>
            
             <div class="col-lg-8">
                <div class="panel panel-red" >
                    <div class="panel-heading ">
                        <i class="fa fa-list-alt fa-fw"></i>HOSTEL RULES AND REGULATIONS
                    </div>
                    <div class="panel-body">
                        <div  style="height:250px; overflow:auto">
                           <ul>
    <li>College has a hostel, which is hygienic and well  furnished for the benefit of the students. </li>
  </ul>
  <ul>
    <li>Resident students must abide by the rules of the  Hostel. Parents are allowed only on visiting days. </li>
    <li>Perfect silence is to be maintained in the  hostel premises including rooms, bathrooms,dining  halls, corridors,common areas etc.</li>
  </ul>
  <ul>
    <li>The hostellers will be permitted to change their  rooms only after Hostel Incharge and chief warden&rsquo;s approval. </li>
</ul>
  <ul>
    <li>Day scholars are not allowed in the hostel.  Hostellers should not encourage entry of day scholars. </li>
    <li>If Students are absenting themselves from  regular classes should get permission of the corresponding staff in-charge andindicate the information to the  Warden 
      and the class advisor</li>
</ul>
  <ul>
    <li>Students with more money can handover it to the  warden otherwise students only responsible for the loss. </li>
    <li>Mobile phones are strictly prohibited inside the  Hostel campus. </li>
</ul>
  <ul>
    <li>The hostel rooms are subject to inspection by  the hostel authorities to make sure that they are kept neat and tidy. </li>
  </ul>
  <ul>
    <li>Every student of the hostel should have the  civic responsibility that he or she should not be a cause inconvenience, annoyance or disturbance to others.</li>
</ul>
  <ul>
    <li>The hostellers should not enter into any  unnecessary conversation, quarrel or altercation with the hostel staff. </li>
</ul>
  <ul>
    <li>Collection of donation for any purpose  (Religious/otherwise) is also strictly prohibited. </li>
    <li>Water should not be wasted unnecessarily. </li>
</ul>
  <ul>
    <li>The hostel rooms and the bath rooms should keep  neat and tidy. </li>
    <li>When leaving the rooms for attending classes,  study time or for vacation, etc., </li>
</ul>
  <ul>
    <li>fans, electrical gadgets, lights etc., should be switched off.</li>
</ul>
  <ul>
    <li>Students are advised not to paste any  poster/announcement in the room. </li>
    <li>Students, who are going for holidays have to  write two letters one for the </li>
</ul>
  <ul>
    <li>staff in-charge and the other for the warden and should get sign  from them.</li>
</ul>
  <ul>
    <li>Students having the self pass only are allowed  to go home for leave days. </li>
    <li>Others are allowed to go with their parent only. </li>
</ul>
  <ul>
    <li>Students are restricted from the outing during  the Sundays. </li>
    <li>The hostellers will be permitted to change their  rooms only after chief warden&rsquo;s approval. </li>
</ul>
  <ul>
    <li>If any student is unwell in the hostel, her  room-mate/next door student should</li>
    <li>immediately inform the warden and can get the first aid.</li>
</ul>
  <ul>
    <li>Students are advised to follow to follow  mess/internet room timings strictly </li>
    <li>Sick person will be served mess food in the  room, only with the permission of study in-charge. </li>
</ul>
  <ul>
    <li>Hostellers should not enter into the kitchen. </li>
</ul>
  <ul>
    <li>Students should not waste food. Waste such as  this is not socially conscious behavior and is not acceptable. </li>
</ul>
  <ul>
    <li>Food will be served at the following things </li>
  </ul>
</div>
                     
                    </div>
                    <div class="panel-footer">
                       
                    </div>
                </div>
        </div>
       
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel">
                    <div class="panel-heading">
                        <i class="fa fa-list-alt fa-fw"></i>Notice Board
                    </div>
                    <div class="panel-body">
                        <div id="accordion" class="panel-group">
                       
                           <?php 
						     $sql="SELECT * FROM notice";
                             $result_set=mysql_query($sql);
						 while($row=mysql_fetch_array($result_set))
 {


                           echo  '<div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#'.$row['serial'].'" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" class="collapsed">'.$row['title'].'&nbsp;</a>';
                           echo         '</h4>
                                </div>
                                <div class="panel-collapse collapse" id="'.$row['serial'].'" aria-expanded="false" style="height: 0px;">
                                    <div class="panel-body">';
                                    echo $row['description'];
                                 echo    '</div></div></div>';


                            }
                           ?>
                        </div>
                    </div>
                    <div class="panel-footer">
                      

                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">

                        <div class="custom-calendar-wrap">
                            <div id="custom-inner" class="custom-inner">
                                <div class="custom-header clearfix">
                                    <nav>
                                        <span id="custom-prev" class="custom-prev"></span>
                                        <span id="custom-next" class="custom-next"></span>
                                    </nav>
                                    <h2 id="custom-month" class="custom-month"></h2>
                                    <h2 id="custom-year" class="custom-year"></h2>
                                </div>
                                <div id="calendar" class="fc-calendar-container"></div>

                            </div>
                        </div>


                </div>
        </div>
    </div>
    <!-- /#page-wrapper -->

  <?php include("footer.php"); ?>

<script type="text/javascript">
    $(function() {

        var transEndEventNames = {
                'WebkitTransition' : 'webkitTransitionEnd',
                'MozTransition' : 'transitionend',
                'OTransition' : 'oTransitionEnd',
                'msTransition' : 'MSTransitionEnd',
                'transition' : 'transitionend'
            },
            transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
            $wrapper = $( '#custom-inner' ),
            $calendar = $( '#calendar' ),
            cal = $calendar.calendario( {
                onDayClick : function( $el, $contentEl, dateProperties ) {

                    if( $contentEl.length > 0 ) {
                        showEvents( $contentEl, dateProperties );
                    }

                },
                caldata : codropsEvents,
                displayWeekAbbr : true
            } ),
            $month = $( '#custom-month' ).html( cal.getMonthName() ),
            $year = $( '#custom-year' ).html( cal.getYear() );

        $( '#custom-next' ).on( 'click', function() {
            cal.gotoNextMonth( updateMonthYear );
        } );
        $( '#custom-prev' ).on( 'click', function() {
            cal.gotoPreviousMonth( updateMonthYear );
        } );

        function updateMonthYear() {
            $month.html( cal.getMonthName() );
            $year.html( cal.getYear() );
        }

        // just an example..
        function showEvents( $contentEl, dateProperties ) {

            hideEvents();

            var $events = $( '<div id="custom-content-reveal" class="custom-content-reveal"><h4>Events for ' + dateProperties.monthname + ' ' + dateProperties.day + ', ' + dateProperties.year + '</h4></div>' ),
                $close = $( '<span class="custom-content-close"></span>' ).on( 'click', hideEvents );

            $events.append( $contentEl.html() , $close ).insertAfter( $wrapper );

            setTimeout( function() {
                $events.css( 'top', '0%' );
            }, 25 );

        }
        function hideEvents() {

            var $events = $( '#custom-content-reveal' );
            if( $events.length > 0 ) {

                $events.css( 'top', '100%' );
                Modernizr.csstransitions ? $events.on( transEndEventName, function() { $( this ).remove(); } ) : $events.remove();

            }

        }

    });
</script>
     
            

