[Phundament](http://phundament.com) / [Giic](http://www.yiiframework.com/extension/giic/) / [GTC](https://github.com/schmunk42/gii-template-collection) / [Hybrid template](https://github.com/schmunk42/gii-template-collection/tree/develop/fullCrud/templates/hybrid) / [Wrest](https://github.com/weavora/wrest) Demo
==========

An app with a generated CRUD and REST API with XML-output

Features:

 * [Sample generated CRUD](http://yiiamplified.com/giic-gtc-hybrid-template-demo/program)
 * [Sample XML-output](http://yiiamplified.com/giic-gtc-hybrid-template-demo/api/program/list)

This app has been based on the following custom data model:

    CREATE TABLE IF NOT EXISTS `program` (
      `id` BIGINT(20) NOT NULL AUTO_INCREMENT,
      `date_umt` DATETIME NULL DEFAULT NULL,
      `start_time` TIME NULL DEFAULT NULL,
      `leadtext` TEXT NULL DEFAULT NULL,
      `name` VARCHAR(150) NULL DEFAULT NULL,
      `b_line` VARCHAR(150) NULL DEFAULT NULL,
      `synopsis` TEXT NULL DEFAULT NULL,
      `url` VARCHAR(255) NULL DEFAULT NULL,
      PRIMARY KEY (`id`))
    ENGINE = InnoDB
    DEFAULT CHARACTER SET = utf8
    COLLATE = utf8_bin;
Based on the following Yii extension projects:

 * [Phundament](http://phundament.com)
 * [Giic](http://www.yiiframework.com/extension/giic/)
 * [GTC](https://github.com/schmunk42/gii-template-collection)
 * [Hybrid template](https://github.com/schmunk42/gii-template-collection/tree/develop/fullCrud/templates/hybrid)
 * [Wrest](https://github.com/weavora/wrest)