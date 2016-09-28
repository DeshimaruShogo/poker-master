<?php
/**
 * カード生成クラス
 * 
 * @author Shogo Deshimaru <deshi.blue@gmail.com>
 * @since PHP 5.6
 * @version 1.0.0
 */
class Cards
{
    // マークの定義
    private $marks = array('spades', 'hearts', 'diams', 'clubs');

    /**
     * 山札の生成
     * @return Array
     */
    public function stock()
    {
        $marks = $this->marks;
        $numbers = range(1, 13);
        // $joker = array(
        //     'mark' => 'joker',
        //     'number' => 'joker',
        // );

        // 山札の生成（$stock）
        $stock = array();
        $card = array();
        for ($i = 0; $i < count($marks); $i++) {
            foreach ($numbers as $number) {
                $card['mark'] = $marks[$i];
                $card['number'] = $number;
                array_push($stock, $card);
            }
        }
        // for ($j = 0; $j < 2; $j++){
        //     array_push($stock, $joker);
        // }
        shuffle($stock);


        return $stock;
    }

}
