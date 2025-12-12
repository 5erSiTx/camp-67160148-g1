@extends('template.default')

    @section('content')
    <div class="container-custom">
        <h1 class="mb-1">แบบฟอร์มสมัคร</h1>
        <p class="lead text-muted mb-4" style="font-size: 14px;">กรุณากรอกข้อมูลให้ครบถ้วน เพื่อใช้ในการติดต่อกลับ</p>

        <form action="#" method="post" enctype="multipart/form-data" novalidate>
            <div class="row g-3 g-md-4">

                <div class="col-12 col-md-6">
                    <label for="fname" class="form-label">ชื่อ *</label>
                    <input id="fname" name="first_name" type="text" class="form-control" placeholder="เช่น สมชาย" required autocomplete="given-name">
                    <div class="valid-feedback">
                        ถูกต้อง
                    </div>
                    <div class="invalid-feedback">
                        กรุณากรอกชื่อของท่าน
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <label for="lname" class="form-label">สกุล *</label>
                    <input id="lname" name="last_name" type="text" class="form-control" placeholder="เช่น ใจดี" required autocomplete="family-name">
                    <div class="valid-feedback">
                        ถูกต้อง
                    </div>
                    <div class="invalid-feedback">
                        กรุณากรอกนามสกุลของท่าน
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <label for="dob" class="form-label">วันเดือนปีเกิด</label>
                    <input id="dob" name="dob" type="date" class="form-control" autocomplete="bday">
                </div>
                <div class="col-12 col-md-6">
                    <label class="form-label d-block">เพศ</label>
                    <div class="d-flex gap-3 align-items-center">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="genderMale" value="male" autocomplete="sex">
                            <label class="form-check-label" for="genderMale">ชาย</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="female" autocomplete="sex">
                            <label class="form-check-label" for="genderFemale">หญิง</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="genderOther" value="other" autocomplete="sex">
                            <label class="form-check-label" for="genderOther">อื่นๆ</label>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <label for="photo" class="form-label">รูป (อัปโหลดภาพ)</label>
                    <input id="photo" name="photo" type="file" class="form-control" accept="image/*" autocomplete="off">
                </div>

                <div class="col-12">
                    <label for="address" class="form-label">ที่อยู่</label>
                    <textarea id="address" name="address" class="form-control" placeholder="บ้านเลขที่ / หมู่ / ตำบล / อำเภอ / จังหวัด" autocomplete="street-address"></textarea>
                </div>

                <div class="col-12 col-md-6">
                    <label for="favcolor" class="form-label">สีที่ชอบ</label>
                    <input id="favcolor" name="favcolor" type="color" class="form-control form-control-color" value="#4f46e5" title="เลือกสี" autocomplete="off">
                </div>

                <div class="col-12 col-md-6">
                    <label class="form-label d-block">แนวเพลงที่ชอบ</label>
                    <div class="checkbox-grid d-flex flex-wrap gap-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="music" value="pop" id="musicPop" autocomplete="off">
                            <label class="form-check-label" for="musicPop">Pop</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="music" value="rock" id="musicRock" autocomplete="off">
                            <label class="form-check-label" for="musicRock">Rock</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="music" value="hiphop" id="musicHipHop" autocomplete="off">
                            <label class="form-check-label" for="musicHipHop">Hip-hop</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="music" value="jazz" id="musicJazz" autocomplete="off">
                            <label class="form-check-label" for="musicJazz">Jazz</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="music" value="country" id="musicCountry" autocomplete="off">
                            <label class="form-check-label" for="musicCountry">Country</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="music" value="classical" id="musicClassical" autocomplete="off">
                            <label class="form-check-label" for="musicClassical">Classical</label>
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-3">
                    <div class="form-check consent">
                        <input class="form-check-input" type="checkbox" value="" id="consentCheck" required autocomplete="off">
                        <label class="form-check-label" for="consentCheck">
                            ข้าพเจ้ายินยอมให้เก็บข้อมูลส่วนบุคคล
                        </label>
                    </div>
                </div>

                <div class="col-12 mt-3">
                    <div class="d-flex gap-2 justify-content-end">
                        <button type="reset" class="btn btn-light border-secondary-subtle px-4 fw-bold">รีเซ็ต</button>
                        <button type="submit" class="btn btn-primary px-4 fw-bold" style="--bs-btn-bg:#4f46e5; --bs-btn-border-color:#4f46e5;">บันทึก</button>
                    </div>
                </div>

            </div>
        </form>
    </div>


    @endsection
@push("scripts")
    <script>

        console.log("Starting script...");

        // document.addEventListener("DOMContentLoaded", function () {
        //     let fname = document.getElementById("fname");

        //     // เมื่อคลิกช่องชื่อ → ให้เรียก clickMe()
        //     fname.addEventListener("click", clickMe);

        //     // (แนะนำ) ตรวจตอนพิมพ์ด้วย
        //     fname.addEventListener("input", clickMe);
        // });

        // let clickMe = function() {
        //     let fname = document.getElementById("fname");
        //     // ส่วนนี้จะทำงานก็ต่อเมื่อมีการเรียกใช้ฟังก์ชัน clickMe เท่านั้น
        //     fname.addEventListener("click", clickMe);
        //     if (fname.value == "") {
        //         fname.classList.remove("is-valid");
        //         fname.classList.add("is-invalid");
        //     } else {
        //         fname.classList.remove("is-invalid");
        //         fname.classList.add("is-valid");
        //     }
        //แก้แล้ว
        document.addEventListener("DOMContentLoaded", function () {
            // ระบุช่องที่ต้องการให้ตรวจ
            let fields = ["fname", "lname"];

            fields.forEach(function(id) {
                let input = document.getElementById(id);

                if (input) {
                    input.addEventListener("click", validateField);
                    input.addEventListener("input", validateField);
                }
            });
        });

        // ฟังก์ชันตรวจสอบช่องฟอร์ม
        function validateField() {
            if (this.value.trim() === "") {
                this.classList.remove("is-valid");
                this.classList.add("is-invalid");
            } else {
                this.classList.remove("is-invalid");
                this.classList.add("is-valid");
            }
        }


    </script>
@endpush
