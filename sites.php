 

<div class="container mt-5" id="sites_section">
    <!-- Section title centered -->
    <h2 class="mb-4 text-center">من اعمالي     </h2>
    
    <?php
    error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);

    $url = 'https://opensheet.elk.sh/1uQ48mjNMIUJfezWNLnW_AwxWgOgk6TLBeHj7H3ljS_o/مواقع الكترونية';

    try {
        $response = file_get_contents($url);

        if ($response !== false) {
            $data = json_decode($response, true);

            if ($data !== null) {
                echo '<table class="table table-bordered table-striped">';
                echo '<thead class="table-dark">';
                echo '<tr>';
                echo '<th scope="col" class="text-center">الاسم</th>';
                echo '<th scope="col" class="text-center">فتح الرابط</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';

                foreach ($data as $row) {
                    $name = htmlspecialchars($row['name'] ?? 'بدون اسم');
                    $url = htmlspecialchars($row['url'] ?? '#');

                    echo '<tr>';
                    echo '<td class="text-center">' . $name . '</td>';
                    echo '<td class="text-center"><a href="' . $url . '" target="_blank" class="btn btn-primary btn-sm">فتح الرابط</a></td>';
                    echo '</tr>';
                }

                echo '</tbody>';
                echo '</table>';
            } else {
                throw new Exception('Failed to parse the JSON response.');
            }
        } else {
            throw new Exception('Failed to retrieve the response.');
        }
    } catch (Exception $e) {
        echo '<p class="text-danger">حدث خطأ أثناء جلب البيانات. يرجى المحاولة لاحقًا.</p>';
    }
    ?>
</div>

 