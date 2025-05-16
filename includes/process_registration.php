<?php

if (!defined('BASE_PATH')) {
    die('دسترسی مستقیم به این فایل مجاز نیست.');
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "BASE_PATH: " . BASE_PATH . "<br>";
echo "File exists check: " . (file_exists(__DIR__ . '/db.php') ? 'Yes' : 'No') . "<br>";

require_once(__DIR__ . '/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'register') {

    $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : '';
    $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : '';
    $fatherName = isset($_POST['fatherName']) ? $_POST['fatherName'] : '';
    $nationalCode = isset($_POST['nationalCode']) ? $_POST['nationalCode'] : '';
    $birthDate = isset($_POST['birthDate']) ? $_POST['birthDate'] : '';
    $previousSchool = isset($_POST['previousSchool']) ? $_POST['previousSchool'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $parentPhone = isset($_POST['parentPhone']) ? $_POST['parentPhone'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $field = isset($_POST['field']) ? $_POST['field'] : '';
    $grade = isset($_POST['grade']) ? $_POST['grade'] : '';
    $mathGrade = isset($_POST['mathGrade']) ? $_POST['mathGrade'] : '';
    $scienceGrade = isset($_POST['scienceGrade']) ? $_POST['scienceGrade'] : '';
    $disciplineGrade = isset($_POST['disciplineGrade']) ? $_POST['disciplineGrade'] : '';
    $additionalInfo = isset($_POST['additionalInfo']) ? $_POST['additionalInfo'] : '';

    $errors = array();

    if (empty($firstName)) {
        $errors[] = 'لطفاً نام خود را وارد کنید.';
    }

    if (empty($lastName)) {
        $errors[] = 'لطفاً نام خانوادگی خود را وارد کنید.';
    }

    if (empty($fatherName)) {
        $errors[] = 'لطفاً نام پدر خود را وارد کنید.';
    }

    if (empty($nationalCode)) {
        $errors[] = 'لطفاً کد ملی خود را وارد کنید.';
    } elseif (strlen($nationalCode) !== 10 || !is_numeric($nationalCode)) {
        $errors[] = 'کد ملی باید دقیقاً 10 رقم باشد.';
    }

    if (empty($birthDate)) {
        $errors[] = 'لطفاً تاریخ تولد خود را وارد کنید.';
    }

    if (empty($previousSchool)) {
        $errors[] = 'لطفاً نام مدرسه قبلی خود را وارد کنید.';
    }

    if (empty($phone)) {
        $errors[] = 'لطفاً شماره تماس خود را وارد کنید.';
    }

    if (empty($parentPhone)) {
        $errors[] = 'لطفاً شماره تماس والدین خود را وارد کنید.';
    }

    if (empty($address)) {
        $errors[] = 'لطفاً آدرس منزل خود را وارد کنید.';
    }

    if (empty($field)) {
        $errors[] = 'لطفاً رشته تحصیلی مورد نظر خود را انتخاب کنید.';
    }

    if (empty($grade)) {
        $errors[] = 'لطفاً معدل کل پایه نهم خود را وارد کنید.';
    }

    if (empty($mathGrade)) {
        $errors[] = 'لطفاً نمره ریاضی خود را وارد کنید.';
    }

    if (empty($scienceGrade)) {
        $errors[] = 'لطفاً نمره علوم خود را وارد کنید.';
    }

    if (empty($disciplineGrade)) {
        $errors[] = 'لطفاً نمره انضباط خود را وارد کنید.';
    }

    if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'لطفاً ایمیل معتبر وارد کنید.';
    }

    if (!empty($nationalCode)) {
        try {
            $sql = "SELECT COUNT(*) as count FROM students WHERE national_code = ?";
            $result = db_fetch_one($sql, [$nationalCode]);

            if ($result && $result['count'] > 0) {
                $errors[] = 'این کد ملی قبلاً در سیستم ثبت شده است.';
            }
        } catch (Exception $e) {

            error_log('خطا در بررسی کد ملی: ' . $e->getMessage());

            $errors[] = 'خطا در بررسی کد ملی: ' . $e->getMessage();
        }
    }

    if (empty($errors)) {

        $data = [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'father_name' => $fatherName,
            'national_code' => $nationalCode,
            'birth_date' => $birthDate,
            'previous_school' => $previousSchool,
            'phone' => $phone,
            'parent_phone' => $parentPhone,
            'address' => $address,
            'email' => $email,
            'field' => $field,
            'grade' => $grade,
            'math_grade' => $mathGrade,
            'science_grade' => $scienceGrade,
            'discipline_grade' => $disciplineGrade,
            'additional_info' => $additionalInfo,
            'status' => 'pending'
        ];

        try {

            $student_id = db_insert('students', $data);

            if ($student_id) {

                $_SESSION['registration_success'] = true;

                $_SESSION['alert_message'] = 'ثبت‌نام شما با موفقیت انجام شد. کارشناسان ما در اسرع وقت با شما تماس خواهند گرفت.';
                $_SESSION['alert_type'] = 'success';

                header('Location: ' . create_url('registration'));
                exit;
            } else {

                $errors[] = 'خطا در ذخیره اطلاعات. لطفاً دوباره تلاش کنید.';
            }
        } catch (Exception $e) {

            error_log('خطا در ثبت نام: ' . $e->getMessage());

            $errors[] = 'خطا: ' . $e->getMessage();
        }
    }

    if (!empty($errors)) {
        $_SESSION['registration_errors'] = $errors;
        $_SESSION['registration_data'] = $_POST; 

        header('Location: ' . create_url('registration'));
        exit;
    }
}