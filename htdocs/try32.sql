SELECT
    product.product_name
    , category.category_name
    , product.price
FROM
    product
    INNER JOIN category
    ON product.category_id = category.category_id
WHERE
    product.price <= 100;