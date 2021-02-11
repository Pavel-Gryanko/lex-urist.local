<div class="modal fade" id="callback-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content lex-modal-area">
            <div class="modal-header">
                <h3 class="modal-header-title">Заказать звонок</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body callback-modal-body">
            <?php echo do_shortcode( '[contact-form-7 id="42" title="Обратный звонок"]' ); ?>
            </div>
        </div>
    </div>
</div>
<!-- callback-modal -->

<div class="modal fade" id="question-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content lex-modal-area">
            <div class="modal-header">
                <h3 class="modal-header-title">Задать вопрос</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body callback-modal-body">
            <?php echo do_shortcode( '[contact-form-7 id="43" title="Задать вопрос"]' ); ?>
            </div>
        </div>
    </div>
</div>
<!-- question-modal -->

<div class="modal fade" id="application-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content lex-modal-area">
            <div class="modal-header">
                <h3 class="modal-header-title">Оставить заявку</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body callback-modal-body">
            <?php echo do_shortcode( '[contact-form-7 id="44" title="Заявка на сайте"]' ); ?>
            </div>
        </div>
    </div>
</div>
<!-- application-modal -->