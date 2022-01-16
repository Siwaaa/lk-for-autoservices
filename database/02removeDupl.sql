DELETE
FROM
    `brands`
WHERE
    `id` NOT IN(
    SELECT
        `id`
    FROM
        (
        SELECT
            MIN(`id`) AS `id`
        FROM
            `brands`
        GROUP BY
            CONCAT(`name`)
    ) AS duplicate_ids
);
