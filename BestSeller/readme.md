## Task: Implement Magento 2 WEB API

#### Purpose of this assignment


To assess a candidate's technical skills.
applicant has to perform relevant tasks that they would do on the job.


#### Task

design and implement a magento 2 module that provides custom REST API end point

> GET /v1/products/bestsellers


1. returns list of best-selling products
2. supports pagination, sort and filter
    - can be filtered by date range (month, year)
    - can filter only discounted products (has special price)
    - can sort by total sales.

3. includes `README.md` that explain your API
4. includes `.git` keep commit log of your progress

*Hint: there is already a class that provides best sellers collection.*


#### Resources
- [Getting Started with Magento Web APIs](https://devdocs.magento.com/guides/v2.2/get-started/bk-get-started-api.html)
- [Configure services as web APIs](https://devdocs.magento.com/guides/v2.2/extension-dev-guide/service-contracts/service-to-web-service.html)
- [Searching with Repositories](https://devdocs.magento.com/guides/v2.2/extension-dev-guide/searching-with-repositories.html)
- [Custom API for Magento 2](https://inchoo.net/magento-2/magento-2-custom-api/)
- [How to Build a Complete Module](https://www.toptal.com/magento/magento-2-tutorial-building-a-complete-module)
- [Magento's Swagger](https://devdocs.magento.com/swagger/)
- [Magento's SO](https://magento.stackexchange.com/)


#### Note
- coding standard, naming convention and code readability taken into account.
- dependency injection is more preferable.
- try to handle edge case in detail (eg. timezone) with best-practice.
- unit test is a plus but not required.
