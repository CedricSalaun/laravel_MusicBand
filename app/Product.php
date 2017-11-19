<?php
    namespace App;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Http\Request;
    class Product extends Model{
        protected $guarded = ['id'];
        const taux_tva = 1.2;
        public function __construct(array $attributes = []){
            parent::__construct($attributes);
        }
        /**
         * Liason 1 to Many
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function category(){
            return $this->belongsTo(Category::class);
        }

        /**
         * @return string
         */
        public function prixTTC(){
            $prixTTC = $this->prix_ht * self::taux_tva;
            return number_format($prixTTC, 2);
        }

        /**
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function coupon(){
            return $this->belongsTo(Coupon::class);
        }
    }
