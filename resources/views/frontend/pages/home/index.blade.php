@extends('frontend/layouts/default')
@section('content')
  <div class="main-content-container">
    @if (Session::has('success'))
      <div class="message-container">
      @foreach(Session::get('success') as $item)
        <p class="alert-success">{{ $item }}</p>
      @endforeach
      </div>
    @endif
    <div class="section__slider">
      <div class="swiper-slider">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide"> <img src="{{asset('/static/frontend/img/slider/slider-1.jpg')}}" alt="" srcset=""></div>
            <div class="swiper-slide"> <img src="{{asset('/static/frontend/img/slider/slider-2.jpg')}}" alt="" srcset=""></div>
            <div class="swiper-slide"> <img src="{{asset('/static/frontend/img/slider/slider-1.jpg')}}" alt="" srcset=""></div>
            <div class="swiper-slide"> <img src="{{asset('/static/frontend/img/slider/slider-2.jpg')}}" alt="" srcset=""></div>
          </div>
        </div>
        <div class="slider-pagination"></div>
      </div>
    </div>
    <div class="section__course">
      <div class="container">
        <div class="pt-3"></div>
        <div class="pt-3"></div>
        <div class="section__title light">
          <h3>Các khóa học tiếng anh tại Le Plateau</h3>
          <p class="text-center">Tùy trình độ và nhu cầu của học viên, Le Plateau luôn có những khóa học phù hợp nhất</p>
        </div>
        <div class="pt-3"></div>
        <div class="swiper-course">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              @foreach($courses as $course)
                <div class="swiper-slide">
                  <div class="course__item">
                    <div class="course__item--img"><img src="/{{ $course->avatar }}" alt="" srcset="" width="375" height="180"/></div>
                    <div class="course__item--content">
                      <h3 class="course__item--title"><a href="#">{{ $course->name }}</a></h3>
                      <p class="course__item--des">{{ $course->sort_description }}</p><a class="course__item--button" href="/course/{{ $course->id }}">Xem chi tiết</a>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
          <!-- Add Arrows-->
          <div class="course-next"><i class="zmdi zmdi-chevron-right"></i></div>
          <div class="course-prev"><i class="zmdi zmdi-chevron-left"></i></div>
        </div>
      </div>
    </div>
    <div class="section__teacher">
      <div class="container">
        <div class="row justify-content-lg-center">
          <div class="col-lg-8">
            <div class="pt-3"></div>
            <div class="pt-3"></div>
            <div class="section__title">
              <h3>Đội ngũ giảng viên ưu tú</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit </p>
            </div>
          </div>
        </div>
        <div class="swiper-teacher">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="teacher__item"><a href="javascrip:void(0)"><img src="{{asset('/static/frontend/img/teacher/teacher-1.jpg')}}" alt=""/><span class="teacher__item--name">TS Bill Gates</span><span class="teacher__item--des">Lorem ipsum dolor sit amet, consectetur adipiscing elit</span></a></div>
              </div>
              <div class="swiper-slide">
                <div class="teacher__item"><a href="javascrip:void(0)"><img src="{{asset('/static/frontend/img/teacher/teacher-2.jpg')}}" alt=""/><span class="teacher__item--name">TS Donald Trump</span><span class="teacher__item--des">Lorem ipsum dolor sit amet, consectetur adipiscing elit</span></a></div>
              </div>
              <div class="swiper-slide">
                <div class="teacher__item"><a href="javascrip:void(0)"><img src="{{asset('/static/frontend/img/teacher/teacher-3.jpg')}}" alt=""/><span class="teacher__item--name">TS Nguyễn Kim Ngân</span><span class="teacher__item--des">Lorem ipsum dolor sit amet, consectetur adipiscing elit</span></a></div>
              </div>
              <div class="swiper-slide">
                <div class="teacher__item"><a href="javascrip:void(0)"><img src="{{asset('/static/frontend/img/teacher/teacher-4.jpg')}}" alt=""/><span class="teacher__item--name">TS Nguyễn Xuân Phúc</span><span class="teacher__item--des">Lorem ipsum dolor sit amet, consectetur adipiscing elit</span></a></div>
              </div>
              <div class="swiper-slide">
                <div class="teacher__item"><a href="javascrip:void(0)"><img src="{{asset('/static/frontend/img/teacher/teacher-1.jpg')}}" alt=""/><span class="teacher__item--name">TS Bill Gates</span><span class="teacher__item--des">Lorem ipsum dolor sit amet, consectetur adipiscing elit</span></a></div>
              </div>
              <div class="swiper-slide">
                <div class="teacher__item"><a href="javascrip:void(0)"><img src="{{asset('/static/frontend/img/teacher/teacher-2.jpg')}}" alt=""/><span class="teacher__item--name">TS Donald Trump</span><span class="teacher__item--des">Lorem ipsum dolor sit amet, consectetur adipiscing elit</span></a></div>
              </div>
              <div class="swiper-slide">
                <div class="teacher__item"><a href="javascrip:void(0)"><img src="{{asset('/static/frontend/img/teacher/teacher-3.jpg')}}" alt=""/><span class="teacher__item--name">TS Nguyễn Kim Ngân</span><span class="teacher__item--des">Lorem ipsum dolor sit amet, consectetur adipiscing elit</span></a></div>
              </div>
              <div class="swiper-slide">
                <div class="teacher__item"><a href="javascrip:void(0)"><img src="{{asset('/static/frontend/img/teacher/teacher-4.jpg')}}" alt=""/><span class="teacher__item--name">TS Nguyễn Xuân Phúc</span><span class="teacher__item--des">Lorem ipsum dolor sit amet, consectetur adipiscing elit</span></a></div>
              </div>
            </div>
          </div>
          <!-- Add Arrows-->
          <div class="teacher-next"><i class="zmdi zmdi-chevron-right"></i></div>
          <div class="teacher-prev"><i class="zmdi zmdi-chevron-left"></i></div>
        </div>
      </div>
    </div>
{{--    <div class="section__students">--}}
{{--      <div class="container">--}}
{{--        <div class="row justify-content-lg-center">--}}
{{--          <div class="col-lg-8">--}}
{{--            <div class="pt-3"></div>--}}
{{--            <div class="pt-3"></div>--}}
{{--            <div class="section__title">--}}
{{--              <h3>Cảm nhận học viên</h3>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--        <div class="swiper-students">--}}
{{--          <div class="swiper-container">--}}
{{--            <div class="swiper-wrapper">--}}
{{--              <div class="swiper-slide">--}}
{{--                <div class="students__item">--}}
{{--                  <div class="students__item-feel">--}}
{{--                    <p class="is-overflow">Đoàn Cao Hương Thảo hiện đang là học sinh lớp 12 tại trường THPT Chuyên Võ Nguyên Giáp, tỉnh Quảng Bình. Xác định mục tiêu du học sau khi tốt nghiệp nên ngay từ những năm học cấp 3, Thảo đã luôn ưu tiên trau dồi khả năng tiếng Anh của mình. </p>--}}
{{--                    <p class="is-active">Đoàn Cao Hương Thảo hiện đang là học sinh lớp 12 tại trường THPT Chuyên Võ Nguyên Giáp, tỉnh Quảng Bình. Xác định mục tiêu du học sau khi tốt nghiệp nên ngay từ những năm học cấp 3, Thảo đã luôn ưu tiên trau dồi khả năng tiếng Anh của mình. </p>--}}
{{--                  </div>--}}
{{--                  <div class="students__item-content"><a class="students__item-avatar" href="student-detail.html"><img src="{{asset('/static/frontend/img/students/student-1.jpg')}}" alt="" srcset=""/></a>--}}
{{--                    <h3>Đoàn cao hương thảo</h3>--}}
{{--                    <p>THPT Chuyên Võ Nguyên Giáp IELTS 8.5</p>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              <div class="swiper-slide">--}}
{{--                <div class="students__item">--}}
{{--                  <div class="students__item-feel">--}}
{{--                    <p class="is-overflow">Mục tiêu của em khi học IELTS tại Le Plateau là 7.5. Chỉ sau một khóa học tiếng Anh và kiến thức xác hội của em ngày càng tốt hơn, giúp em đạt 8.0 IELTS. Em đánh giá Le Plateau là cơ sở rất tốt để các bạn học sinh có mục tiêu du học như em theo đuổi.</p>--}}
{{--                    <p class="is-active">Mục tiêu của em khi học IELTS tại Le Plateau là 7.5. Chỉ sau một khóa học tiếng Anh và kiến thức xác hội của em ngày càng tốt hơn, giúp em đạt 8.0 IELTS. Em đánh giá Le Plateau là cơ sở rất tốt để các bạn học sinh có mục tiêu du học như em theo đuổi.</p>--}}
{{--                  </div>--}}
{{--                  <div class="students__item-content"><a class="students__item-avatar" href="student-detail.html"><img src="{{asset('/static/frontend/img/students/student-3.jpg')}}" alt="" srcset=""/></a>--}}
{{--                    <h3>Lê ngọc minh</h3>--}}
{{--                    <p>THPT Việt Đức - IELTS 8.0</p>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              <div class="swiper-slide">--}}
{{--                <div class="students__item">--}}
{{--                  <div class="students__item-feel">--}}
{{--                    <p class="is-overflow">Trong quá trình học tập tại Le Plateau, Lan Chi nhận thấy khóa học tại Le Plateau vô cùng bổ ích với các giờ học cùng các thầy cô giáo bản địa có kinh nghiệm và trình độ giảng dạy nhiều năm tại Le Plateau</p>--}}
{{--                    <p class="is-active">Trong quá trình học tập tại Le Plateau, Lan Chi nhận thấy khóa học tại Le Plateau vô cùng bổ ích với các giờ học cùng các thầy cô giáo bản địa có kinh nghiệm và trình độ giảng dạy nhiều năm tại Le Plateau</p>--}}
{{--                  </div>--}}
{{--                  <div class="students__item-content"><a class="students__item-avatar" href="student-detail.html"><img src="{{asset('/static/frontend/img/students/student-2.jpg')}}" alt="" srcset=""/></a>--}}
{{--                    <h3>Đoàn cao hương thảo</h3>--}}
{{--                    <p>THPT Chuyên Võ Nguyên Giáp IELTS 8.5</p>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              <div class="swiper-slide">--}}
{{--                <div class="students__item">--}}
{{--                  <div class="students__item-feel">--}}
{{--                    <p class="is-overflow">Đoàn Cao Hương Thảo hiện đang là học sinh lớp 12 tại trường THPT Chuyên Võ Nguyên Giáp, tỉnh Quảng Bình. Xác định mục tiêu du học sau khi tốt nghiệp nên ngay từ những năm học cấp 3, Thảo đã luôn ưu tiên trau dồi khả năng tiếng Anh của mình. </p>--}}
{{--                    <p class="is-active">Đoàn Cao Hương Thảo hiện đang là học sinh lớp 12 tại trường THPT Chuyên Võ Nguyên Giáp, tỉnh Quảng Bình. Xác định mục tiêu du học sau khi tốt nghiệp nên ngay từ những năm học cấp 3, Thảo đã luôn ưu tiên trau dồi khả năng tiếng Anh của mình. </p>--}}
{{--                  </div>--}}
{{--                  <div class="students__item-content"><a class="students__item-avatar" href="student-detail.html"><img src="{{asset('/static/frontend/img/students/student-1.jpg')}}" alt="" srcset=""/></a>--}}
{{--                    <h3>Đoàn cao hương thảo</h3>--}}
{{--                    <p>THPT Chuyên Võ Nguyên Giáp IELTS 8.5</p>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              <div class="swiper-slide">--}}
{{--                <div class="students__item">--}}
{{--                  <div class="students__item-feel">--}}
{{--                    <p class="is-overflow">Mục tiêu của em khi học IELTS tại Le Plateau là 7.5. Chỉ sau một khóa học tiếng Anh và kiến thức xác hội của em ngày càng tốt hơn, giúp em đạt 8.0 IELTS. Em đánh giá Le Plateau là cơ sở rất tốt để các bạn học sinh có mục tiêu du học như em theo đuổi.</p>--}}
{{--                    <p class="is-active">Mục tiêu của em khi học IELTS tại Le Plateau là 7.5. Chỉ sau một khóa học tiếng Anh và kiến thức xác hội của em ngày càng tốt hơn, giúp em đạt 8.0 IELTS. Em đánh giá Le Plateau là cơ sở rất tốt để các bạn học sinh có mục tiêu du học như em theo đuổi.</p>--}}
{{--                  </div>--}}
{{--                  <div class="students__item-content"><a class="students__item-avatar" href="student-detail.html"><img src="{{asset('/static/frontend/img/students/student-3.jpg')}}" alt="" srcset=""/></a>--}}
{{--                    <h3>Lê ngọc minh</h3>--}}
{{--                    <p>THPT Việt Đức - IELTS 8.0</p>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              <div class="swiper-slide">--}}
{{--                <div class="students__item">--}}
{{--                  <div class="students__item-feel">--}}
{{--                    <p class="is-overflow">Trong quá trình học tập tại Le Plateau, Lan Chi nhận thấy khóa học tại Le Plateau vô cùng bổ ích với các giờ học cùng các thầy cô giáo bản địa có kinh nghiệm và trình độ giảng dạy nhiều năm tại Le Plateau</p>--}}
{{--                    <p class="is-active">Trong quá trình học tập tại Le Plateau, Lan Chi nhận thấy khóa học tại Le Plateau vô cùng bổ ích với các giờ học cùng các thầy cô giáo bản địa có kinh nghiệm và trình độ giảng dạy nhiều năm tại Le Plateau</p>--}}
{{--                  </div>--}}
{{--                  <div class="students__item-content"><a class="students__item-avatar" href="student-detail.html"><img src="{{asset('/static/frontend/img/students/student-2.jpg')}}" alt="" srcset=""/></a>--}}
{{--                    <h3>Đoàn cao hương thảo</h3>--}}
{{--                    <p>THPT Chuyên Võ Nguyên Giáp IELTS 8.5</p>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--        <div class="students-pagination"></div>--}}
{{--      </div>--}}
{{--      <div class="pt-4"></div>--}}
{{--    </div>--}}
  </div>
  <!-- popup subscribe for student -->
  <!-- @include('frontend.includes.popup.subscribe') -->
@endsection

