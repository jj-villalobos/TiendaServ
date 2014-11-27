<?php
class DebitcardFixture extends CakeTestFixture {

    public $import = 'Debitcard';

    public $records = array(
        array(
            'id' => 1,
            'card_number' => '4185417256930711',
            'nip' => '1234',
            'csc' => '4321',
            'expiration_date' => '2018-12-10',
            'balance' => 1000,
        ),
        array(
            'id' => 2,
            'card_number' => '5185417256930712',
            'nip' => '5678',
            'csc' => '8765',
            'expiration_date' => '2018-12-10',
            'balance' => 1000,
        ),
        array(
            'id' => 3,
            'card_number' => '6185417256930713',
            'nip' => '9012',
            'csc' => '2109',
            'expiration_date' => '2018-12-10',
            'balance' => 1000,
        )
    );
}
?>