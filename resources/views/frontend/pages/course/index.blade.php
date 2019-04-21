@extends('frontend/layouts/default')
@section('content')
<div class="main-content-container">
  <div class="main__content">
    <div class="page__breadcrumb">
      <div class="container">
        <h3 class="page__breadcrumb--title">Các khóa học</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">LE PLATEAU</a></li>
            <li class="breadcrumb-item active" aria-current="page">Các khóa học</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="page__content">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-lg-9">
            <div class="content-header">
              <h2 class="title">Khóa học ĐÀO TẠO Tiếng anh sơ cấp (ENGLISH BOOTCAMP)</h2>
              <ul class="menu-icon">
                <li><i class="zmdi zmdi-folder"></i><span>Các khóa học</span></li>
                <li><i class="zmdi zmdi-tag"></i><span>Các khóa học, tháng 11/2018</span></li>
              </ul>
            </div>
            <div class="content-main">
              <p class="text-center text-primary font-italic">“ Tạo ra một môi trường kỷ luật tuyệt đối cho học viên để các bạn tự học, tự cất cánh ”</p>
              <div class="accordion accordion-course-detail" id="accordion-course-detail">
                <div class="card">
                  <div class="card-header" id="heading-0">
                    <h5 class="mb-0">
                      <button class="btn btn-primary btn-accordion" type="button" data-toggle="collapse" data-target="#collapse-0" aria-expanded="true" aria-controls="collapse-0"><i class="zmdi zmdi-plus mr-2"></i><i class="zmdi zmdi-minus mr-2"></i>ENGLISH BOOTCAMP 1</button>
                    </h5>
                  </div>
                  <div class="collapse show" id="collapse-0" aria-labelledby="heading-0" data-parent="#accordion-course-detail">
                    <div class="card-body">
                      <ol>
                        <li>
                          <h3>Thời gian khai giảng: <span class="text-primary text-lowercase">ngày 02 hằng tháng.</span></h3>
                        </li>
                        <li>
                          <h3>Thời gian đào tạo:</h3>
                          <p>- Học viên sẽăn ở sinh hoạt, học tập toàn thời gian tại Hostel Le Plateau trong 30 ngày.<br>- Các khóa sẽ khai giảng liên tục hằng tháng. <br>- Học viên có thể theo dõi Fanpage Le Plateau Education để cập nhật thông tin thường xuyên.</p>
                        </li>
                        <li>
                          <h3>Địa điểm:</h3>
                          <p>Le Plateau Hostel (Biệt thự trắng), khu biệt thự Măng Đen, thôn Măng Đen, xã Đắc Long, huyện Kon Plong, tỉnh Kon Tum.</p>
                        </li>
                        <li>
                          <h3>Đối tượng học viên:</h3>
                          <p>English bootcamp là khóa học tiếng Anh nội trú, tập trung vào kỹ năng giao tiếp (nghe và nói) bằng tiếng Anh trong đời sống hằng ngày. Khóa học phù hợp với các bạn sinh viên, người đi làm hoặc đã từng học tiếng Anh mong muốn trau dồi kỹ năng giao tiếp và rèn luyện thói quen tự học tiếng Anh phục vụ cho công việc, du học, du lịch…</p>
                        </li>
                        <li>
                          <h3>Trình độ nhập học:</h3>
                          <p>Trình độ sơ cấp hoặc mới bắt đầu học tiếng Anh.</p>
                        </li>
                        <li>
                          <h3>Mục tiêu khóa học:</h3>
                          <ol>
                            <li> <span>Tiếng Anh:</span>
                              <p>
                                Trang bị một phương pháp tự học hiệu quảGiúp học viên luyện tập tiếng Anh trong môi trường sử dụng tiếng Anh 24/7 để hình thành thói quen giao tiếp tự tin.
                                Xây dựng vốn từ vựng, mẫu câu thông dụng trong đời sống hằng ngày và công việc
                                Luyện kỹ năng phát âm và ngữ điệu tiếng Anh
                              </p>
                            </li>
                            <li><span>Rèn luyện thể chất và kỷ luật:</span>
                              <p>Ngoài thời gian trên lớp, các học viên bắt buộc phải dành thời gian chạy, đạp xe, tập gym… Buổi sáng là thời gian rèn luyện thể chất với lớp, buổi chiều tập luyện cá nhân hoặc theo nhóm. Học viên cũng phải tuân thủ tất cả nội quy của chương trình và có hình phạt nghiêm khắc cho các thành viên vi phạm.</p>
                              <p class="font-italic">Lưu ý:  Một lỗi vi phạm, học viên phải nộp phạt 100 nghìn vào quỹ lớp, sau 5 lần vi phạm học viên đó sẽ không được chấp nhận đào tạo và không hoàn trả học phí.</p>
                            </li>
                            <li><span>Đọc sách</span>
                              <p>Các học viên được cung cấp những cuốn sách hay nhất, kinh điển nhất. Mỗi tuần, học viên có buổi thảo luận, đánh giá về cuốn sách đã đọc.</p>
                            </li>
                          </ol>
                        </li>
                        <li>
                          <h3>Đội ngũ giảng viên</h3>
                          <p>
                            Đội ngũ giảng viên tâm huyết với giáo dục, năng động, sáng tạoGiảng viên tốt nghiệp chuyên ngành sư phạm Anh, đã từng du học hoặc làm việc tại nước ngoài.</p>
                        </li>
                        <li>
                          <h3>Tiến trình học tập:</h3>
                          <p>
                            Mỗi ngày, học viên có tối thiểu 6 giờ học tiếng Anh, liên tiếp từ thứ Hai đến thứ Sáu trong suốt khóa học. Thời gian còn lại học viên tự học với sự giúp đỡ của trợ giảng.Cuối tuần, học viên sẽ được làm bài thi nói (phỏng vấn, thuyết trình, đóng kịch,..) nhằm giúp học viên thấy rõ tiến trình học tập và sự tiến bộ của mình. Học viên được nhận phản hồi và góp ý cá nhân trực tiếp ngay sau phần thi.
                            Khi tham gia chương trình, học viên được yêu cầu giao tiếp bằng tiếng Anh toàn thời gian trong suốt quá trình học tập và sinh hoạt tại cơ sở.
                          </p>
                        </li>
                        <li> 
                          <h3>Phương pháp dạy:</h3>
                          <p>
                            Chương trình học được thiết kế theo phương pháp học dựa trên các dự án thực tiễn (project - based learning) cùng với việc thực hành liên tục giúp học viên phát triển khả năng ngôn ngữ và tăng thêm sự tự tin khi sử dụng tiếng Anh.Chương trình sẽ bao gồm các kiến thức cơ bản như ngữ pháp, từ vựng, cách phát âm...giúp học viên có được nền tảng vững chắc để có thể tự trau dồi kiến thức tiếng Anh ngay cả khi kết thúc khóa học.
                            Các dự án đòi hỏi học viên phải chủ động tìm tòi, nghiên cứu thông tin. Sau đó, học viên thuyết trình và thảo luận theo nhóm về chủ đề được giao.
                            Việc tìm hiểu các chủ đề hoàn toàn bằng tiếng Anh giúp học viên tăng cường từ vựng và kiến thức thực tế. Học viên được luyện tập khả năng phân tích và chọn lọc thông tin từ những nguồn phù hợp phục vụ cho quá trình tự học suốt đời.
                            Ngoài ra, học viên sẽ được hướng dẫn cách lập kế hoạch học tập cá nhân và cung cấp nguồn tài liệu tự học.
                          </p>
                        </li>
                        <li>
                          <h3>Hoạt động ngoại khóa:</h3>
                          <p>Team building, dã ngoại: Ngoài giờ học căng thẳng, các học viên có thể tham gia các hoạt động ngoài trời như đọc sách trong rừng thông, ngắm hồ, đạp xe trong rừng, thăm quan các danh lam thắng cảnh…. Trải nghiệm một cuộc sống tuyệt vời với những cảnh đẹp trời phú tại nhưng địa điểm tổ chức chương trình học.</p>
                        </li>
                        <li>
                          <h3>Nội quy chương trình</h3><br><span>Những việc PHẢI LÀM:</span>
                          <p>1. Sử dụng toàn bộ tiếng Anh trong khuôn viên Le Plateau. <br>2. Thực hiện thời gian biểu, lên lớp và tham gia các hoạt động đúng giờ.<br>2. Giữ gìn vệ sinh sạch sẽ, cả nhà và người. <br>3. Tích cực vận động mỗi ngày hai lần, mỗi lần 30 phút tối thiểu, hít thở khí trời đất trong lành ở nơi mình ở, rèn luyện tâm, thể, tài.<br>4. Tích cực hỏi han, nói chuyện với giáo viên để góp ý, học hỏi.<br>5. Tự học bài, ôn bài lại sau khi học xong, hoàn thành deadline đúng hạn.</p><span>Những việc KHÔNG NÊN LÀM:</span>
                          <p><b>1. KHÔNG </b>dùng điện thoại và online trong giờ học, trừ trường hợp khẩn cấp.<br><b>2. KHÔNG </b>tùy tiện nghỉ học không phép, tự ý nghỉ học không báo trước.<br><b>3. KHÔNG </b>trễ các hạn nộp bài làm, các bài tập giao cho vì bất cứ lý do gì.</p>
                          <p class="font-weight-bold font-italic">Nếu vi phạm một trong những điều khoản trên, học viên phải đóng phạt 100 nghìn đồng/ lỗi vi phạm. Học viên sẽ bị buộc thôi học sau 5 lần vi phạm.</p>
                        </li>
                      </ol>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="heading-1">
                    <h5 class="mb-0">
                      <button class="btn btn-primary btn-accordion" type="button" data-toggle="collapse" data-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1"><i class="zmdi zmdi-plus mr-2"></i><i class="zmdi zmdi-minus mr-2"></i>ENGLISH BOOTCAMP 2</button>
                    </h5>
                  </div>
                  <div class="collapse" id="collapse-1" aria-labelledby="heading-1" data-parent="#accordion-course-detail">
                    <div class="card-body">
                      <ol>
                        <li>
                          <h3>Thời gian khai giảng: <span class="text-primary text-lowercase">ngày 02 hằng tháng.</span></h3>
                        </li>
                        <li>
                          <h3>Thời gian đào tạo:</h3>
                          <p>- Học viên sẽăn ở sinh hoạt, học tập toàn thời gian tại Hostel Le Plateau trong 30 ngày.<br>- Các khóa sẽ khai giảng liên tục hằng tháng. <br>- Học viên có thể theo dõi Fanpage Le Plateau Education để cập nhật thông tin thường xuyên.</p>
                        </li>
                        <li>
                          <h3>Địa điểm:</h3>
                          <p>Le Plateau Hostel (Biệt thự trắng), khu biệt thự Măng Đen, thôn Măng Đen, xã Đắc Long, huyện Kon Plong, tỉnh Kon Tum.</p>
                        </li>
                        <li>
                          <h3>Đối tượng học viên:</h3>
                          <p>English bootcamp là khóa học tiếng Anh nội trú, tập trung vào kỹ năng giao tiếp (nghe và nói) bằng tiếng Anh trong đời sống hằng ngày. Khóa học phù hợp với các bạn sinh viên, người đi làm hoặc đã từng học tiếng Anh mong muốn trau dồi kỹ năng giao tiếp và rèn luyện thói quen tự học tiếng Anh phục vụ cho công việc, du học, du lịch…</p>
                        </li>
                        <li>
                          <h3>Trình độ nhập học:</h3>
                          <p>Trình độ sơ cấp hoặc mới bắt đầu học tiếng Anh.</p>
                        </li>
                        <li>
                          <h3>Mục tiêu khóa học:</h3>
                          <ol>
                            <li> <span>Tiếng Anh:</span>
                              <p>
                                Trang bị một phương pháp tự học hiệu quảGiúp học viên luyện tập tiếng Anh trong môi trường sử dụng tiếng Anh 24/7 để hình thành thói quen giao tiếp tự tin.
                                Xây dựng vốn từ vựng, mẫu câu thông dụng trong đời sống hằng ngày và công việc
                                Luyện kỹ năng phát âm và ngữ điệu tiếng Anh
                              </p>
                            </li>
                            <li><span>Rèn luyện thể chất và kỷ luật:</span>
                              <p>Ngoài thời gian trên lớp, các học viên bắt buộc phải dành thời gian chạy, đạp xe, tập gym… Buổi sáng là thời gian rèn luyện thể chất với lớp, buổi chiều tập luyện cá nhân hoặc theo nhóm. Học viên cũng phải tuân thủ tất cả nội quy của chương trình và có hình phạt nghiêm khắc cho các thành viên vi phạm.</p>
                              <p class="font-italic">Lưu ý:  Một lỗi vi phạm, học viên phải nộp phạt 100 nghìn vào quỹ lớp, sau 5 lần vi phạm học viên đó sẽ không được chấp nhận đào tạo và không hoàn trả học phí.</p>
                            </li>
                            <li><span>Đọc sách</span>
                              <p>Các học viên được cung cấp những cuốn sách hay nhất, kinh điển nhất. Mỗi tuần, học viên có buổi thảo luận, đánh giá về cuốn sách đã đọc.</p>
                            </li>
                          </ol>
                        </li>
                        <li>
                          <h3>Đội ngũ giảng viên</h3>
                          <p>
                            Đội ngũ giảng viên tâm huyết với giáo dục, năng động, sáng tạoGiảng viên tốt nghiệp chuyên ngành sư phạm Anh, đã từng du học hoặc làm việc tại nước ngoài.</p>
                        </li>
                        <li>
                          <h3>Tiến trình học tập:</h3>
                          <p>
                            Mỗi ngày, học viên có tối thiểu 6 giờ học tiếng Anh, liên tiếp từ thứ Hai đến thứ Sáu trong suốt khóa học. Thời gian còn lại học viên tự học với sự giúp đỡ của trợ giảng.Cuối tuần, học viên sẽ được làm bài thi nói (phỏng vấn, thuyết trình, đóng kịch,..) nhằm giúp học viên thấy rõ tiến trình học tập và sự tiến bộ của mình. Học viên được nhận phản hồi và góp ý cá nhân trực tiếp ngay sau phần thi.
                            Khi tham gia chương trình, học viên được yêu cầu giao tiếp bằng tiếng Anh toàn thời gian trong suốt quá trình học tập và sinh hoạt tại cơ sở.
                          </p>
                        </li>
                        <li> 
                          <h3>Phương pháp dạy:</h3>
                          <p>
                            Chương trình học được thiết kế theo phương pháp học dựa trên các dự án thực tiễn (project - based learning) cùng với việc thực hành liên tục giúp học viên phát triển khả năng ngôn ngữ và tăng thêm sự tự tin khi sử dụng tiếng Anh.Chương trình sẽ bao gồm các kiến thức cơ bản như ngữ pháp, từ vựng, cách phát âm...giúp học viên có được nền tảng vững chắc để có thể tự trau dồi kiến thức tiếng Anh ngay cả khi kết thúc khóa học.
                            Các dự án đòi hỏi học viên phải chủ động tìm tòi, nghiên cứu thông tin. Sau đó, học viên thuyết trình và thảo luận theo nhóm về chủ đề được giao.
                            Việc tìm hiểu các chủ đề hoàn toàn bằng tiếng Anh giúp học viên tăng cường từ vựng và kiến thức thực tế. Học viên được luyện tập khả năng phân tích và chọn lọc thông tin từ những nguồn phù hợp phục vụ cho quá trình tự học suốt đời.
                            Ngoài ra, học viên sẽ được hướng dẫn cách lập kế hoạch học tập cá nhân và cung cấp nguồn tài liệu tự học.
                          </p>
                        </li>
                        <li>
                          <h3>Hoạt động ngoại khóa:</h3>
                          <p>Team building, dã ngoại: Ngoài giờ học căng thẳng, các học viên có thể tham gia các hoạt động ngoài trời như đọc sách trong rừng thông, ngắm hồ, đạp xe trong rừng, thăm quan các danh lam thắng cảnh…. Trải nghiệm một cuộc sống tuyệt vời với những cảnh đẹp trời phú tại nhưng địa điểm tổ chức chương trình học.</p>
                        </li>
                        <li>
                          <h3>Nội quy chương trình</h3><br><span>Những việc PHẢI LÀM:</span>
                          <p>1. Sử dụng toàn bộ tiếng Anh trong khuôn viên Le Plateau. <br>2. Thực hiện thời gian biểu, lên lớp và tham gia các hoạt động đúng giờ.<br>2. Giữ gìn vệ sinh sạch sẽ, cả nhà và người. <br>3. Tích cực vận động mỗi ngày hai lần, mỗi lần 30 phút tối thiểu, hít thở khí trời đất trong lành ở nơi mình ở, rèn luyện tâm, thể, tài.<br>4. Tích cực hỏi han, nói chuyện với giáo viên để góp ý, học hỏi.<br>5. Tự học bài, ôn bài lại sau khi học xong, hoàn thành deadline đúng hạn.</p><span>Những việc KHÔNG NÊN LÀM:</span>
                          <p><b>1. KHÔNG </b>dùng điện thoại và online trong giờ học, trừ trường hợp khẩn cấp.<br><b>2. KHÔNG </b>tùy tiện nghỉ học không phép, tự ý nghỉ học không báo trước.<br><b>3. KHÔNG </b>trễ các hạn nộp bài làm, các bài tập giao cho vì bất cứ lý do gì.</p>
                          <p class="font-weight-bold font-italic">Nếu vi phạm một trong những điều khoản trên, học viên phải đóng phạt 100 nghìn đồng/ lỗi vi phạm. Học viên sẽ bị buộc thôi học sau 5 lần vi phạm.</p>
                        </li>
                      </ol>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="heading-2">
                    <h5 class="mb-0">
                      <button class="btn btn-primary btn-accordion" type="button" data-toggle="collapse" data-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2"><i class="zmdi zmdi-plus mr-2"></i><i class="zmdi zmdi-minus mr-2"></i>ENGLISH BOOTCAMP 3</button>
                    </h5>
                  </div>
                  <div class="collapse" id="collapse-2" aria-labelledby="heading-2" data-parent="#accordion-course-detail">
                    <div class="card-body">
                      <ol>
                        <li>
                          <h3>Thời gian khai giảng: <span class="text-primary text-lowercase">ngày 02 hằng tháng.</span></h3>
                        </li>
                        <li>
                          <h3>Thời gian đào tạo:</h3>
                          <p>- Học viên sẽăn ở sinh hoạt, học tập toàn thời gian tại Hostel Le Plateau trong 30 ngày.<br>- Các khóa sẽ khai giảng liên tục hằng tháng. <br>- Học viên có thể theo dõi Fanpage Le Plateau Education để cập nhật thông tin thường xuyên.</p>
                        </li>
                        <li>
                          <h3>Địa điểm:</h3>
                          <p>Le Plateau Hostel (Biệt thự trắng), khu biệt thự Măng Đen, thôn Măng Đen, xã Đắc Long, huyện Kon Plong, tỉnh Kon Tum.</p>
                        </li>
                        <li>
                          <h3>Đối tượng học viên:</h3>
                          <p>English bootcamp là khóa học tiếng Anh nội trú, tập trung vào kỹ năng giao tiếp (nghe và nói) bằng tiếng Anh trong đời sống hằng ngày. Khóa học phù hợp với các bạn sinh viên, người đi làm hoặc đã từng học tiếng Anh mong muốn trau dồi kỹ năng giao tiếp và rèn luyện thói quen tự học tiếng Anh phục vụ cho công việc, du học, du lịch…</p>
                        </li>
                        <li>
                          <h3>Trình độ nhập học:</h3>
                          <p>Trình độ sơ cấp hoặc mới bắt đầu học tiếng Anh.</p>
                        </li>
                        <li>
                          <h3>Mục tiêu khóa học:</h3>
                          <ol>
                            <li> <span>Tiếng Anh:</span>
                              <p>
                                Trang bị một phương pháp tự học hiệu quảGiúp học viên luyện tập tiếng Anh trong môi trường sử dụng tiếng Anh 24/7 để hình thành thói quen giao tiếp tự tin.
                                Xây dựng vốn từ vựng, mẫu câu thông dụng trong đời sống hằng ngày và công việc
                                Luyện kỹ năng phát âm và ngữ điệu tiếng Anh
                              </p>
                            </li>
                            <li><span>Rèn luyện thể chất và kỷ luật:</span>
                              <p>Ngoài thời gian trên lớp, các học viên bắt buộc phải dành thời gian chạy, đạp xe, tập gym… Buổi sáng là thời gian rèn luyện thể chất với lớp, buổi chiều tập luyện cá nhân hoặc theo nhóm. Học viên cũng phải tuân thủ tất cả nội quy của chương trình và có hình phạt nghiêm khắc cho các thành viên vi phạm.</p>
                              <p class="font-italic">Lưu ý:  Một lỗi vi phạm, học viên phải nộp phạt 100 nghìn vào quỹ lớp, sau 5 lần vi phạm học viên đó sẽ không được chấp nhận đào tạo và không hoàn trả học phí.</p>
                            </li>
                            <li><span>Đọc sách</span>
                              <p>Các học viên được cung cấp những cuốn sách hay nhất, kinh điển nhất. Mỗi tuần, học viên có buổi thảo luận, đánh giá về cuốn sách đã đọc.</p>
                            </li>
                          </ol>
                        </li>
                        <li>
                          <h3>Đội ngũ giảng viên</h3>
                          <p>
                            Đội ngũ giảng viên tâm huyết với giáo dục, năng động, sáng tạoGiảng viên tốt nghiệp chuyên ngành sư phạm Anh, đã từng du học hoặc làm việc tại nước ngoài.</p>
                        </li>
                        <li>
                          <h3>Tiến trình học tập:</h3>
                          <p>
                            Mỗi ngày, học viên có tối thiểu 6 giờ học tiếng Anh, liên tiếp từ thứ Hai đến thứ Sáu trong suốt khóa học. Thời gian còn lại học viên tự học với sự giúp đỡ của trợ giảng.Cuối tuần, học viên sẽ được làm bài thi nói (phỏng vấn, thuyết trình, đóng kịch,..) nhằm giúp học viên thấy rõ tiến trình học tập và sự tiến bộ của mình. Học viên được nhận phản hồi và góp ý cá nhân trực tiếp ngay sau phần thi.
                            Khi tham gia chương trình, học viên được yêu cầu giao tiếp bằng tiếng Anh toàn thời gian trong suốt quá trình học tập và sinh hoạt tại cơ sở.
                          </p>
                        </li>
                        <li> 
                          <h3>Phương pháp dạy:</h3>
                          <p>
                            Chương trình học được thiết kế theo phương pháp học dựa trên các dự án thực tiễn (project - based learning) cùng với việc thực hành liên tục giúp học viên phát triển khả năng ngôn ngữ và tăng thêm sự tự tin khi sử dụng tiếng Anh.Chương trình sẽ bao gồm các kiến thức cơ bản như ngữ pháp, từ vựng, cách phát âm...giúp học viên có được nền tảng vững chắc để có thể tự trau dồi kiến thức tiếng Anh ngay cả khi kết thúc khóa học.
                            Các dự án đòi hỏi học viên phải chủ động tìm tòi, nghiên cứu thông tin. Sau đó, học viên thuyết trình và thảo luận theo nhóm về chủ đề được giao.
                            Việc tìm hiểu các chủ đề hoàn toàn bằng tiếng Anh giúp học viên tăng cường từ vựng và kiến thức thực tế. Học viên được luyện tập khả năng phân tích và chọn lọc thông tin từ những nguồn phù hợp phục vụ cho quá trình tự học suốt đời.
                            Ngoài ra, học viên sẽ được hướng dẫn cách lập kế hoạch học tập cá nhân và cung cấp nguồn tài liệu tự học.
                          </p>
                        </li>
                        <li>
                          <h3>Hoạt động ngoại khóa:</h3>
                          <p>Team building, dã ngoại: Ngoài giờ học căng thẳng, các học viên có thể tham gia các hoạt động ngoài trời như đọc sách trong rừng thông, ngắm hồ, đạp xe trong rừng, thăm quan các danh lam thắng cảnh…. Trải nghiệm một cuộc sống tuyệt vời với những cảnh đẹp trời phú tại nhưng địa điểm tổ chức chương trình học.</p>
                        </li>
                        <li>
                          <h3>Nội quy chương trình</h3><br><span>Những việc PHẢI LÀM:</span>
                          <p>1. Sử dụng toàn bộ tiếng Anh trong khuôn viên Le Plateau. <br>2. Thực hiện thời gian biểu, lên lớp và tham gia các hoạt động đúng giờ.<br>2. Giữ gìn vệ sinh sạch sẽ, cả nhà và người. <br>3. Tích cực vận động mỗi ngày hai lần, mỗi lần 30 phút tối thiểu, hít thở khí trời đất trong lành ở nơi mình ở, rèn luyện tâm, thể, tài.<br>4. Tích cực hỏi han, nói chuyện với giáo viên để góp ý, học hỏi.<br>5. Tự học bài, ôn bài lại sau khi học xong, hoàn thành deadline đúng hạn.</p><span>Những việc KHÔNG NÊN LÀM:</span>
                          <p><b>1. KHÔNG </b>dùng điện thoại và online trong giờ học, trừ trường hợp khẩn cấp.<br><b>2. KHÔNG </b>tùy tiện nghỉ học không phép, tự ý nghỉ học không báo trước.<br><b>3. KHÔNG </b>trễ các hạn nộp bài làm, các bài tập giao cho vì bất cứ lý do gì.</p>
                          <p class="font-weight-bold font-italic">Nếu vi phạm một trong những điều khoản trên, học viên phải đóng phạt 100 nghìn đồng/ lỗi vi phạm. Học viên sẽ bị buộc thôi học sau 5 lần vi phạm.</p>
                        </li>
                      </ol>
                    </div>
                  </div>
                </div>
              </div>
              <div class="pt-3"></div>
            </div>
          </div>
          <div class="col-md-4 col-lg-3">
            <div class="nav-course-list"><a href="#">Khóa học đào tạo tiếng anh sơ cấp</a><a href="#">Khóa học ĐÀO TẠO TIẾNG ANH PRE-IELTS</a><a href="#">Khóa học LUYỆN THI TIẾNG ANH IELTS</a><a href="#">Khóa học TÀI CHÍNH</a></div>
            <!-- include nav-right -->
            @include('frontend.includes.nav-right')
          </div>
        </div>
      </div>
      <div class="section__form-get-route bg-grey">
        <!-- include form-get-route -->
        @include('frontend.includes.form-get-route')
      </div>
    </div>
  </div>
</div>
@endsection
