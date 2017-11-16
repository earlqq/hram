<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="connected-carousels">
        <div class="stage">
            <div class="carousel carousel-stage">
                <ul>
                    <?foreach($arResult["ITEMS"] as $arItem):?>
                    <li width="450" height="450" style="margin-right: 10px"  alt="" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
                            <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
                                            class="preview_picture"
                                            border="0"
                                            src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                                            width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
                                            height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
                                            alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                                            title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                                            style="float:left"
                                    /></a>
                            <?else:?>
                                <img
                                        class="preview_picture"
                                        border="0"
                                        src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                                        width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
                                        height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
                                        alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                                        title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                                        style="float:left"
                                />
                            <?endif;?>
                        <?endif?>
                    </li>
                    <?endforeach;?>
                </ul>
            </div>
            <div class="navigation">
                <h2 align="center">Новости</h2>
                <div class="carousel carousel-navigation">
                    <ul>
                        <?foreach($arResult["ITEMS"] as $arItem):?>
                        <li id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                            <a href="#"> <em class="date"><?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
                                        <span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
                                    <?endif?></em>
                                <span><?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                                        <?echo $arItem["PREVIEW_TEXT"];?>
                                    <?endif;?></span>
                            </a>
                        </li>
                        <?endforeach;?>
                        <div class="jcarousel-pagination"></div>
                    </ul>
                    <a class="more" href="#">Все новости</a>
                </div>
            </div>
        </div>
</div>