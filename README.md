# Laravel Image Resizer

Avoid storage overload by resizing images in Laravel 10

## Overview

This Laravel package, developed by [Coder Labs Pro](https://coderlabs.pro), focuses on optimizing image uploads in web applications, preventing unnecessary storage consumption. Often, in the rush to deliver a functional development, optimization tasks are overlooked. This package addresses the need to optimize images uploaded through forms in various scenarios such as profile registration, job applications, event forms, course enrollment, product registration, feedback surveys, complaint forms, photography contests, and technical support requests.

## Problem Statement

Frequently, users upload large image files without optimization, leading to both increased dimension (width x height) and file size (sometimes up to 5 MB). Lacking proper filtering or code to optimize these images, they are freely added to the system. Over time, this can result in server alerts due to insufficient space, requiring manual intervention to normalize the system.

## Importance

Optimizing images is crucial, especially for clients using cloud services like Azure or AWS, where exceeding storage limits can result in unexpected billing increases. Failure to address this issue promptly can lead to server failures and difficulties in performing necessary upgrades.

## Benefits

1. **Space Efficiency**: Reduces unnecessary storage usage.
2. **Cost Savings**: Helps avoid unexpected billing charges in cloud services.
3. **System Stability**: Prevents server overloads and potential failures.
4. **Improved User Experience**: Ensures faster load times for image-intensive forms.
5. **Proactive Maintenance**: Mitigates risks associated with delayed system enhancements.

## Contribution

Contributions are welcome! Feel free to open issues or submit pull requests.

## License

This project is licensed under the MIT License - see the [LICENSE](link-to-license) file for details.
