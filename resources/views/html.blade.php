@extends('template.default')

@section('content')
    <form action="/welcome" method="post" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="container-custom">
            <h1 class="mb-1">แบบฟอร์มสมัคร</h1>
            <p class="lead text-muted mb-4" style="font-size: 14px;">กรุณากรอกข้อมูลให้ครบถ้วน เพื่อใช้ในการติดต่อกลับ</p>
                <div class="row g-3 g-md-4">

                    <div class="col-12 col-md-6">
                        <label for="fname" class="form-label">ชื่อ *</label>
                        <input id="fname" name="first_name" type="text" class="form-control" placeholder="เช่น สมชาย"
                            required autocomplete="given-name">
                        <div class="valid-feedback">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            กรุณากรอกชื่อของท่าน
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="lname" class="form-label">สกุล *</label>
                        <input id="lname" name="last_name" type="text" class="form-control" placeholder="เช่น ใจดี"
                            required autocomplete="family-name">
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
                        <div class="valid-feedback">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            กรุณากรอกวันเดือนปีเกิดของท่าน
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <label class="form-label d-block">เพศ</label>
                        <div id="sex" class="d-flex gap-3 align-items-center">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="genderMale" value="male"
                                    autocomplete="sex">
                                <label class="form-check-label" for="genderMale">ชาย</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="genderFemale"
                                    value="female" autocomplete="sex">
                                <label class="form-check-label" for="genderFemale">หญิง</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="genderOther"
                                    value="other" autocomplete="sex">
                                <label class="form-check-label" for="genderOther">อื่นๆ</label>
                            </div>
                        </div>
                        <div class="valid-feedback">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            กรุณาระบุเพศของท่าน
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <label for="photo" class="form-label">รูป (อัปโหลดภาพ)</label>
                        <input id="photo" name="photo" type="file" class="form-control" accept="image/*"
                            autocomplete="off">
                        <div class="valid-feedback">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            กรุณาอัปโหลดภาพของท่าน
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="address" class="form-label">ที่อยู่</label>
                        <textarea id="address" name="address" class="form-control" placeholder="บ้านเลขที่ / หมู่ / ตำบล / อำเภอ / จังหวัด"
                            autocomplete="street-address"></textarea>
                        <div class="valid-feedback">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            กรุณากรอกที่อยู่ของท่าน
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <label for="favcolor" class="form-label">สีที่ชอบ</label>
                        <select class="form-select" id="favcolor" name="favcolor" required>
                            <option value="" selected disabled>-- กรุณาเลือกสี --</option>
                            <option value="แดง">แดง</option>
                            <option value="เขียว">เขียว</option>
                            <option value="น้ำเงิน">น้ำเงิน</option>
                            <option value="เหลือง">เหลือง</option>
                            <option value="ชมพู">ชมพู</option>
                            <option value="ฟ้า">ฟ้า</option>
                            <option value="ดำ">ดำ</option>
                            <option value="ขาว">ขาว</option>
                        </select>
                        <div class="valid-feedback">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            กรุณากรอกสีที่ชอบของท่าน
                        </div>
                    </div>

                    <!-- แนวเพลงที่ชอบ -->
                    <div class="col-12 col-md-6">
                        <label class="form-label d-block">แนวเพลงที่ชอบ</label>
                        <div id="favsong"class="checkbox-grid d-flex flex-wrap gap-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="music[]" value="pop"
                                    id="musicPop" autocomplete="off">
                                <label class="form-check-label" for="musicPop">Pop</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="music[]" value="rock"
                                    id="musicRock" autocomplete="off">
                                <label class="form-check-label" for="musicRock">Rock</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="music[]" value="hiphop"
                                    id="musicHipHop" autocomplete="off">
                                <label class="form-check-label" for="musicHipHop">Hip-hop</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="music[]" value="jazz"
                                    id="musicJazz" autocomplete="off">
                                <label class="form-check-label" for="musicJazz">Jazz</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="music[]" value="country"
                                    id="musicCountry" autocomplete="off">
                                <label class="form-check-label" for="musicCountry">Country</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="music[]" value="classical"
                                    id="musicClassical" autocomplete="off">
                                <label class="form-check-label" for="musicClassical">Classical</label>
                            </div>
                        </div>
                        <div id="musicValid" class="valid-feedback d-none">
                            ถูกต้อง
                        </div>
                        <div id="musicInvalid" class="invalid-feedback d-none">
                            กรุณาเลือกแนวเพลงอย่างน้อย 1 แนว
                        </div>
                    </div>

                    <!-- ข้อตกลงการเก็บข้อมูลส่วนบุคคล -->
                    <div class="col-12 mt-3">
                        <div class="form-check consent">
                            <input class="form-check-input" type="checkbox" value="" id="consentCheck" required
                                autocomplete="off">
                            <label class="form-check-label" for="consentCheck">
                                ข้าพเจ้ายินยอมให้เก็บข้อมูลส่วนบุคคล
                            </label>
                        </div>
                        <div class="valid-feedback">
                            ขอบคุณที่ยินยอม
                        </div>
                        <div class="invalid-feedback">
                            กรุณายินยอมก่อนส่งข้อมูล
                        </div>
                    </div>

                    <!-- ปุ่มบันทึก -->
                    <div class="col-12 mt-3">
                        <div class="d-flex gap-2 justify-content-end">
                            <button type="reset"
                                class="btn btn-light border-secondary-subtle px-4 fw-bold">รีเซ็ต</button>
                            <button type="submit" class="btn btn-primary px-4 fw-bold"
                                style="--bs-btn-bg:#4f46e5; --bs-btn-border-color:#4f46e5;"
                                onclick="Summitcheck()">บันทึก</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </form>
@endsection
@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            // realtime validation ช่องปกติ
            let fields = ["fname", "lname", "dob", "address", "favcolor", "photo"];
            fields.forEach(id => {
                let input = document.getElementById(id);
                if (input) {
                    input.addEventListener("input", validateField);
                }
            });

            // checkbox เพลง → realtime
            document.querySelectorAll('#favsong input[type="checkbox"]').forEach(cb => {
                cb.addEventListener('change', validateMusic);
            });
        });


        function Summitcheck() {
            let fields = ["fname", "lname", "dob", "address", "favcolor", "photo", "consentCheck"];
            let allValid = true;

            fields.forEach(id => {
                let input = document.getElementById(id);
                if (!input) return;
                if (input.type === "checkbox") {
                    if (!input.checked) {
                        allValid = false;
                        input.classList.add("is-invalid");
                        input.classList.remove("is-valid");
                    } else {
                        input.classList.add("is-valid");
                        input.classList.remove("is-invalid");
                    }
                } else {
                    if (input.value.trim() === "") {
                        allValid = false;
                        input.classList.add("is-invalid");
                        input.classList.remove("is-valid");
                    } else {
                        input.classList.add("is-valid");
                        input.classList.remove("is-invalid");
                    }
                }
            });
            if (!validateGender()) allValid = false;
            // ตรวจแนวเพลง
            if (!validateMusic()) allValid = false;

            return allValid; // สำคัญ
        }

        function validateGender() {
            const radios = document.querySelectorAll('input[name="gender"]');
            const container = document.getElementById("sex");

            let checked = false;
            radios.forEach(r => {
                if (r.checked) checked = true;
            });

            // reset
            container.classList.remove("is-valid", "is-invalid");

            if (!checked) {
                container.classList.add("is-invalid");
                return false;
            } else {
                container.classList.add("is-valid");
                return true;
            }
        }


        // =====================
        // MUSIC VALIDATION
        // =====================
        function validateMusic() {
            const checkboxes = document.querySelectorAll('#favsong input[type="checkbox"]');
            const container = document.getElementById('favsong');
            const validMsg = document.getElementById('musicValid');
            const invalidMsg = document.getElementById('musicInvalid');

            let checkedCount = 0;
            checkboxes.forEach(cb => {
                if (cb.checked) checkedCount++;
            });

            // reset ทุกครั้ง
            container.classList.remove('is-valid', 'is-invalid');
            validMsg.classList.add('d-none');
            invalidMsg.classList.add('d-none');

            if (checkedCount > 0) {
                container.classList.add('is-valid');
                validMsg.classList.remove('d-none');
                return true;
            } else {
                container.classList.add('is-invalid');
                invalidMsg.classList.remove('d-none');
                return false;
            }
        }

        // =====================
        // FIELD VALIDATION
        // =====================
        function validateField() {
            if (this.value.trim() === "") {
                this.classList.add("is-invalid");
                this.classList.remove("is-valid");
            } else {
                this.classList.add("is-valid");
                this.classList.remove("is-invalid");
            }
        }
    </script>
@endpush
