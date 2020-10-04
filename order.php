<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thong tin dat tiec</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .wrapper {
            width: 500px;
            background-color: lavender;
            display: flex;
            margin: 0 auto;
        }

        .content {
            width: 500px;
            margin: 0 auto;

        }

        .cont_title,
        .cont_footer {
            display: flex;
            justify-content: center;
            line-height: 50px;
            border: 1px solid black;
            height: 50px;
            align-items: center;
        }

        .cont_row,
        .cont_left,
        .cont_right {
            display: flex;

        }

        .cont_row {
            align-items: center;
            min-height: 30px;
            border: 1px solid black;
        }

        .cont_left {
            width: 300px;

        }

        .cont_right {
            width: 200px;

        }

        .c_tit {
            padding: 0px 10px;
        }

        input[type=text] {
            width: 100px;
        }

        input[type=submit] {
            height: 30px;
            width: 100px;
        }
    </style>
</head>

<body>
    <form method="GET">
        <div class="wrapper">
            <div class="content">

                <div class="cont_title">
                    <h1>Thong tin dat tiec</h1>
                </div>

                <div class="cont_cont">
                    <div class="cont_row">
                        <div class="cont_left">
                            <div class="c_tit">
                                <label>So khach tham gia: </label>
                            </div>
                            <div class="c_inp">
                                <input type="text" name="soluong">
                            </div>
                        </div>
                        <div class="cont_right">
                            <div class="c_tit">
                                <label>Ngay: </label>
                            </div>
                            <div class="c_inp">
                                <input type="text" name="date">
                            </div>
                        </div>
                    </div>
                    <div class="cont_row">
                        <div class="cont_left">
                            <div class="c_tit">
                                <label>Thoi gian: </label>
                            </div>
                            <div class="c_inp">
                                <input type="checkbox" name="time" value="morning"> Sang
                                <input type="checkbox" name="time" value="evening"> Trua
                                <input type="checkbox" name="time" value="afternoon"> Toi
                            </div>
                        </div>
                    </div>
                    <div class="cont_row">
                        <div class="cont_left">
                            <div class="c_tit">
                                <label for="place">Dia diem: </label>
                            </div>
                            <div class="c_inp">
                                <input type="radio" name="place" value="in_door"> Trong nha
                                <input type="radio" name="place" value="out_door"> Ngoai troi
                            </div>
                        </div>
                    </div>
                    <div class="cont_row">
                        <div class="cont_left">
                            <div class="c_tit">
                                <label>Ten khach hang: </label>
                            </div>
                            <div class="c_inp">
                                <input type="text" name="name_c">
                            </div>
                        </div>
                        <div class="cont_right">
                            <div class="c_tit">
                                <label>Gioi tinh: </label>
                            </div>
                            <div class="c_inp">
                                <input type="radio" name="gender" value="Nam"> Nam
                                <input type="radio" name="gender" value="Nu"> Nu
                            </div>
                        </div>
                    </div>
                    <div class="cont_row">
                        <div class="cont_left">
                            <div class="c_tit">
                                <label>Dia chi khach hang: </label>
                            </div>
                            <div class="c_inp">
                                <input type="text" name="address">
                            </div>
                        </div>

                    </div>
                    <div class="cont_row">
                        <div class="cont_left">
                            <div class="c_tit">
                                <label for="soluong">Yeu cau cua khach hang</label>
                            </div>
                        </div>

                    </div>
                    <div class="cont_row">
                        <div class="cont_left">
                            <div class="c_inp">
                                <textarea name="" cols="20" rows="3"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="cont_row">
                        <div class="cont_left">
                            <div class="c_tit">
                                <label>Khach hang biet den nha hang qua: </label>
                            </div>

                        </div>
                        <div class="cont_right">

                            <div class="c_inp">
                                <select name="marketing">
                                    <option value="BaoChi">Bao Chi</option>
                                    <option value="FaceBook">FaceBook</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="cont_footer">
                    <input type="submit" value="Dat Tiec" name="ok">
                </div>
                <div class="cont_footer">
                    <?php

                    $opp = 200000;
                    $time_discount = 1;
                    $place_discount = 1;
                    $slot_discount = 1;

                    if (isset($_GET['ok'])) {

                        if ((isset($_GET['soluong']) && $_GET['soluong'] == null)
                            || (isset($_GET['date']) && $_GET['date'] == null)
                            || (isset($_GET['name_c']) && $_GET['name_c'] == null)
                            || (isset($_GET['address']) && $_GET['address'] == null)
                            || (isset($_GET['time'])  == null)
                            || (isset($_GET['place'])  == null)
                            || (isset($_GET['gender'])  == null)
                        ) echo "Vui long nhap du thong tin!";
                        else {
                            if (isset($_GET['time']) && $_GET['time'] == "morning") {
                                $time_discount = 0.9;
                            }

                            if (isset($_GET['place']) && $_GET['place'] == "in_door") {
                                $place_discount = 0.95;
                            }

                            if ($_GET['soluong'] > 20) {
                                $slot_discount = 0.9;
                            }

                            $pay = $opp * $_GET['soluong'] * $time_discount  * $place_discount * $slot_discount;

                            echo "Tong tien phai tra: " . $pay . "k";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </form>
</body>

</html>