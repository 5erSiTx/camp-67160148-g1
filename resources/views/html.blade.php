<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>แบบฟอร์มสมัคร</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        :root {
            --bs-body-bg: #f3f6fb;
            --bs-card-bg: #ffffff;
            --bs-primary: #4f46e5;
            --bs-border-radius: 14px;
        }
        body {
            background: linear-gradient(180deg, var(--bs-body-bg), #e9f0ff);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem; /* Use Bootstrap spacing utility */
        }
        .container-custom {
            width: 100%;
            max-width: 900px;
            background: var(--bs-card-bg);
            border-radius: var(--bs-border-radius);
            box-shadow: 0 10px 30px rgba(20, 25, 40, 0.08);
            padding: 28px;
        }
        /* Custom styling for the checkbox grid to match the original look */
        .checkbox-grid .form-check-label {
            display: flex;
            gap: 8px;
            align-items: center;
            background: #f8fafc;
            border: 1px solid #eef2ff;
            padding: 8px 10px;
            border-radius: 8px;
            font-size: 13px;
            margin-bottom: 0; /* Override default margin */
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container-custom">
        <h1 class="mb-1">แบบฟอร์มสมัคร</h1>
        <p class="lead text-muted mb-4" style="font-size: 14px;">กรุณากรอกข้อมูลให้ครบถ้วน เพื่อใช้ในการติดต่อกลับ</p>

        <form action="#" method="post" enctype="multipart/form-data" novalidate>
            <div class="row g-3 g-md-4">
                
                <div class="col-12 col-md-6">
                    <label for="fname" class="form-label">ชื่อ *</label>
                    <input id="fname" name="first_name" type="text" class="form-control" placeholder="เช่น สมชาย" required>
                </div>
                <div class="col-12 col-md-6">
                    <label for="lname" class="form-label">สกุล *</label>
                    <input id="lname" name="last_name" type="text" class="form-control" placeholder="เช่น ใจดี" required>
                </div>

                <div class="col-12 col-md-6">
                    <label for="dob" class="form-label">วันเดือนปีเกิด</label>
                    <input id="dob" name="dob" type="date" class="form-control">
                </div>
                <div class="col-12 col-md-6">
                    <label class="form-label d-block">เพศ</label>
                    <div class="d-flex gap-3 align-items-center">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="genderMale" value="male">
                            <label class="form-check-label" for="genderMale">ชาย</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="female">
                            <label class="form-check-label" for="genderFemale">หญิง</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="genderOther" value="other">
                            <label class="form-check-label" for="genderOther">อื่นๆ</label>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <label for="photo" class="form-label">รูป (อัปโหลดภาพ)</label>
                    <input id="photo" name="photo" type="file" class="form-control" accept="image/*">
                </div>

                <div class="col-12">
                    <label for="address" class="form-label">ที่อยู่</label>
                    <textarea id="address" name="address" class="form-control" placeholder="บ้านเลขที่ / หมู่ / ตำบล / อำเภอ / จังหวัด"></textarea>
                </div>

                <div class="col-12 col-md-6">
                    <label for="favcolor" class="form-label">สีที่ชอบ</label>
                    <input id="favcolor" name="favcolor" type="color" class="form-control form-control-color" value="#4f46e5" title="เลือกสี">
                </div>

                <div class="col-12 col-md-6">
                    <label class="form-label d-block">แนวเพลงที่ชอบ</label>
                    <div class="checkbox-grid d-flex flex-wrap gap-2">
                        <div class="form-check">
                            <input class="form-check-input visually-hidden" type="checkbox" name="music" value="pop" id="musicPop">
                            <label class="form-check-label" for="musicPop">Pop</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input visually-hidden" type="checkbox" name="music" value="rock" id="musicRock">
                            <label class="form-check-label" for="musicRock">Rock</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input visually-hidden" type="checkbox" name="music" value="hiphop" id="musicHipHop">
                            <label class="form-check-label" for="musicHipHop">Hip-hop</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input visually-hidden" type="checkbox" name="music" value="jazz" id="musicJazz">
                            <label class="form-check-label" for="musicJazz">Jazz</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input visually-hidden" type="checkbox" name="music" value="country" id="musicCountry">
                            <label class="form-check-label" for="musicCountry">Country</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input visually-hidden" type="checkbox" name="music" value="classical" id="musicClassical">
                            <label class="form-check-label" for="musicClassical">Classical</label>
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-3">
                    <div class="form-check consent">
                        <input class="form-check-input" type="checkbox" value="" id="consentCheck" required>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>