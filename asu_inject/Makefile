ARCHS = arm64

include $(THEOS)/makefiles/common.mk

TOOL_NAME = asu_inject

asu_inject_FILES = asu_inject.c
asu_inject_CFLAGS += -fvisibility=hidden
asu_inject_INSTALL_PATH = /usr/bin
asu_inject_CODESIGN_FLAGS = -S../entitlements.plist

include $(THEOS_MAKE_PATH)/tool.mk
