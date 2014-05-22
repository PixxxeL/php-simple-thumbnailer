Original
========

https://code.google.com/p/gregphotoimage/
http://www.gregphoto.net/projects/gregphoto_image/docs/

About
=====

Fork of PHP Gregphoto_Image for making thumbnail.

Библиотека выбрана как компактная и наиболее удобная для модификации.
Изменена логика вычисления размеров thumb без обратной совместимости.
Все примеры для оригинальной Gregphoto_Image актуальны за исключением 
использования констант `FIT_WIDTH`, `FIT_HEIGHT`, `CROP_FIT`, `EXACT`
вместо `MAX_WIDTH`, `MAX_HEIGHT`, `BEST_FIT`, `EXACT` и того что в режиме
FIT_WIDTH не обязательно задавать высоту, а FIT_HEIGHT - ширину.

