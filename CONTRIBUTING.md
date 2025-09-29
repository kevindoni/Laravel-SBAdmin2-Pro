# Contributing to Laravel SBAdmin2 Pro

Thanks for your interest in contributing! We welcome bug reports, improvements, and new features.

Before you start:

-   Read the project `README.md` and run the project locally if possible.
-   Check existing issues to avoid duplicates.

How to contribute:

1. Fork the repository.
2. Create a feature branch:

```bash
git checkout -b feature/your-feature-name
```

3. Implement your changes. Follow PSR-12 coding standards for PHP.
4. Add or update tests where appropriate.
5. Run the test suite:

```bash
./vendor/bin/phpunit
```

6. Commit your changes with a clear message and push to your fork:

```bash
git commit -m "Add feature: ..."
git push origin feature/your-feature-name
```

7. Open a Pull Request to this repository's `main` branch. Provide a clear description and reference any related issues.

Coding style & quality:

-   Follow PSR-12 coding standards.
-   Keep functions and methods focused and small.
-   Add comments for non-obvious logic.

Testing:

-   Include unit/feature tests for new functionality.
-   Ensure all tests pass locally before opening a PR.

Security:

-   Do not commit secrets or credentials. Use environment variables for configuration.

Thank you for contributing! We appreciate your time and effort.
