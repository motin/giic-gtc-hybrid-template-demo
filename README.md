[Phundament](http://phundament.com) / [Giic](http://www.yiiframework.com/extension/giic/) / [GTC](https://github.com/schmunk42/gii-template-collection) / [Hybrid GTC CRUD-generator template](https://github.com/schmunk42/gii-template-collection/tree/develop/fullCrud/templates/hybrid) / [Wrest](https://github.com/weavora/wrest) Demo
==========

An app with a generated CRUD and REST API with XML-output created by [Motin](http://github.com/motin) to show how these projects can be used to quickly produce a production-ready REST interface and backend from any existing data model.

Demo:

 * [Sample generated CRUD](http://yiiamplified.com/giic-gtc-hybrid-template-demo/program) (login: admin/admin)
 * [Sample XML-output](http://yiiamplified.com/giic-gtc-hybrid-template-demo/api/program/list)

The demo has been based on the following custom data model:

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
To generate an app based on a more complex data model, check-out the instructions on how to load the MySQL sakila demo database found at [http://www.yiiframework.com/extension/giic/](http://www.yiiframework.com/extension/giic/)

### Credits

Contributors to [Yii](http://yiiframework.com) and the following extension projects:

 * [Phundament](http://phundament.com)
 * [Giic](http://www.yiiframework.com/extension/giic/)
 * [GTC](https://github.com/schmunk42/gii-template-collection)
 * [Hybrid GTC CRUD-generator template](https://github.com/schmunk42/gii-template-collection/tree/develop/fullCrud/templates/hybrid)
 * [Wrest](https://github.com/weavora/wrest)

(Note: [Motin](http://github.com/motin) is the creator of Hybrid GTC CRUD-generator template, a regular committer to GTC and an active Phundament / Wrest contributor)