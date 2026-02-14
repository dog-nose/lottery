#!/bin/bash
cd "$CLAUDE_PROJECT_DIR"
composer format && composer lint && composer test
