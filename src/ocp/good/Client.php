<?php
declare(strict_types=1);

namespace myapp\ocp\good;

require_once '../../../vendor/autoload.php';

(new PaymentService(new Card()))->subscribe();
(new PaymentService(new Apple()))->subscribe();
